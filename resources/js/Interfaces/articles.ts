interface Article {
    id: number;
    title: string;
    content: string;
    url: string;
    created_at: string;
}

interface PaginationLink {
    url: string;
    label: string;
    active: boolean;
}


interface ArticlesList {
    current_page:   number;
    data: Article[];
    first_page_url: string;
    from: number;
    last_page: number;
    last_page_url: string;
    links : PaginationLink[];
    next_page_url: string;
    path: string;
    per_page: number;
    prev_page_url: string|null;
    to: number;
    total: number;
}



export { Article, ArticlesList};