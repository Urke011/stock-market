@include("layouts/header")
<div class="stock-wrapper">
    <h1 style="background-color: #0f5132; text-align: center;" class="text-white p-1">Advisor page</h1>
    <h4>Welcome to the advisor page. Here you can ask questions about investing in the stock market, popular market
        actions or savings examples</h4>
    <form action="{{route('advisor.apiRequest')}}" method="post">
        @csrf
        @method('post')
        <div>
            <div class="pb-3">
                <label for="exampleFormControlInput1" class="form-label">Your name</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name"
                       required>
            </div>
            <div>
                <select class="form-select form-select-lg mb-3" name="indexName" aria-label=".form-select-lg example" required>
                    <option value="" selected>Select stock index</option>
                    <option value="Dow_Jones_Industrial_Average">Dow Jones Industrial Average</option>
                    <option value="S&P_500">S&P 500</option>
                    <option value="Nasdaq_Composite">Nasdaq Composite</option>
                    <option value="DAX_PERFORMANCE_INDEX">DAX PERFORMANCE-INDEX</option>
                    <option value="Hang_Seng_Index">Hang Seng Index</option>
                    <option value="Nikkei_225">Nikkei 225</option>
                </select>
            </div>
            <div>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="investPeriod" required>
                    <option value="" selected>Do you want to invest monthly or annually?</option>
                    <option value="monthly">monthly</option>
                    <option value="annually">annually</option>
                </select>
            </div>
            <div>
                <label>How much dollars do you want to invest?</label>
                <input type="number" class="form-control" name="invest" id="exampleFormControlInput1" min="1"
                       placeholder="Price" required>
            </div>
            <div class="pt-3">
                <label>Ask our Stock advisor a question</label>
                <textarea type="text" class="form-control" name="question" id="exampleFormControlInput1"
                          placeholder="Your question" rows="4" cols="50" required></textarea>
            </div>
            <input type="submit" class="btn btn-primary mt-2" value="Ask">
        </div>
    </form>
</div>
@include("layouts/footer")
