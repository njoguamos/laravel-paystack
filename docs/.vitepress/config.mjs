import {defineConfig} from 'vitepress'

// https://vitepress.dev/reference/site-config
export default defineConfig({
    title: "Laravel Paystack",
    description: "A Laravel package for Paystack payment integration",
    themeConfig: {
        head: [
            [
                'script',
                { defer: '', 'data-domain': 'paystack.njoguamos.me.ke', src: 'https://st.artisanelevated.com/js/script.tagged-events.js' }
            ],
        ],
        nav: [
            {text: 'Home', link: '/'},
            {text: 'Guide', link: '/introduction/getting-started'}
        ],

        sidebar: [
            {
                text: 'Introduction',
                collapsed: false,
                items: [
                    {text: 'Getting Started', link: '/introduction/getting-started'},
                ]
            },
            {
                text: 'Transactions',
                collapsed: true,
                items: [
                    {text: 'Initialize Transaction', link: '/transactions/initialize-transaction'},
                    {text: 'Verify Transaction ⚠︎', link: '/transactions/verify-transaction'},
                    {text: 'List Transactions ⚠︎', link: '/transactions/list-transactions'},
                    {text: 'Fetch Transaction ⚠︎', link: '/transactions/fetch-transaction'},
                    {text: 'Charge Authorization ⚠︎', link: '/transactions/charge-authorization'},
                    {text: 'View Transaction Timeline ⚠︎', link: '/transactions/view-transaction-timeline'},
                    {text: 'Transaction Totals ⚠︎', link: '/transactions/transaction-totals'},
                    {text: 'Export Transactions ⚠︎', link: '/transactions/export-transactions'},
                    {text: 'Partial Debit ⚠︎', link: '/transactions/partial-debit'},
                ]
            },
            {
                text: 'Transaction Splits',
                collapsed: true,
                items: [
                    {text: 'Create Split ⚠︎', link: '/transaction-splits/create-split'},
                    {text: 'List/Search Splits ⚠︎', link: '/transaction-splits/list-search-splits'},
                    {text: 'Fetch Split ⚠︎', link: '/transaction-splits/fetch-split'},
                    {text: 'Update Split ⚠︎', link: '/transaction-splits/update-split'},
                    {text: 'Add/Update Split ⚠︎', link: '/transaction-splits/add-update-split'},
                    {text: 'Subaccount ⚠︎', link: '/transaction-splits/subaccount'},
                    {text: 'Remove Subaccount from Split ⚠︎', link: '/transaction-splits/remove-subaccount-from-split'},
                ]
            },
            {
                text: 'Terminal',
                collapsed: true,
                items: [
                    {text: 'Send Event ⚠︎', link: '/terminal/send-event'},
                    {text: 'Fetch Event Status ⚠︎', link: '/terminal/fetch-event-status'},
                    {text: 'Fetch Terminal Status ⚠︎', link: '/terminal/fetch-terminal-status'},
                    {text: 'List Terminals ⚠︎', link: '/terminal/list-terminals'},
                    {text: 'Fetch Terminal ⚠︎', link: '/terminal/fetch-terminal'},
                    {text: 'Update Terminal ⚠︎', link: '/terminal/update-terminal'},
                    {text: 'Commission Terminal ⚠︎', link: '/terminal/commission-terminal'},
                    {text: 'Decommission Terminal ⚠︎', link: '/terminal/decommission-terminal'},
                ]
            },
            {
                text: 'Virtual Terminal',
                collapsed: true,
                items: [
                    {text: 'Create Virtual Terminal ⚠︎', link: '/virtual-terminal/create-virtual-terminal'},
                    {text: 'List Virtual Terminals ⚠︎', link: '/virtual-terminal/list-virtual-terminals'},
                    {text: 'Fetch Virtual Terminal ⚠︎', link: '/virtual-terminal/fetch-virtual-terminal'},
                    {text: 'Update Virtual Terminal ⚠︎', link: '/virtual-terminal/update-virtual-terminal'},
                    {text: 'Deactivate Virtual Terminal ⚠︎', link: '/virtual-terminal/deactivate-virtual-terminal'},
                    {text: 'Assign Virtual Terminal Destination ⚠︎', link: '/virtual-terminal/assign-virtual-terminal-destination'},
                    {text: 'Unassign Virtual Terminal Destination ⚠︎', link: '/virtual-terminal/unassign-virtual-terminal-destination'},
                    {text: 'Add Split Code to Virtual Terminal ⚠︎', link: '/virtual-terminal/add-split-code-to-virtual-terminal'},
                    {text: 'Remove Split Code from Virtual Terminal ⚠︎', link: '/virtual-terminal/remove-split-code-from-virtual-terminal'},
                ]
            },
            {
                text: 'Customers',
                collapsed: true,
                items: [
                    {text: 'Create Customer ⚠︎', link: '/customers/create-customer'},
                    {text: 'List Customers ⚠︎', link: '/customers/list-customers'},
                    {text: 'Fetch Customer ⚠︎', link: '/customers/fetch-customer'},
                    {text: 'Update Customer ⚠︎', link: '/customers/update-customer'},
                    {text: 'Validate Customer ⚠︎', link: '/customers/validate-customer'},
                    {text: 'Whitelist/Blacklist Customer ⚠︎', link: '/customers/whitelist-blacklist-customer'},
                    {text: 'Deactivate Authorization ⚠︎', link: '/customers/deactivate-authorization'},
                ]
            },
            {
                text: 'Dedicated Virtual Accounts',
                collapsed: true,
                items: [
                    {text: 'Create Dedicated Virtual Account ⚠︎', link: '/dedicated-virtual-accounts/create-dedicated-virtual-account'},
                    {text: 'Assign Dedicated Virtual Account ⚠︎', link: '/dedicated-virtual-accounts/assign-dedicated-virtual-account'},
                    {text: 'List Dedicated Accounts ⚠︎', link: '/dedicated-virtual-accounts/list-dedicated-accounts'},
                    {text: 'Fetch Dedicated Account ⚠︎', link: '/dedicated-virtual-accounts/fetch-dedicated-account'},
                    {text: 'Requery Dedicated Account ⚠︎', link: '/dedicated-virtual-accounts/requery-dedicated-account'},
                    {text: 'Deactivate Dedicated Account ⚠︎', link: '/dedicated-virtual-accounts/deactivate-dedicated-account'},
                    {text: 'Split Dedicated Account Transaction ⚠︎', link: '/dedicated-virtual-accounts/split-dedicated-account-transaction'},
                    {text: 'Remove Split from Dedicated Account ⚠︎', link: '/dedicated-virtual-accounts/remove-split-from-dedicated-account'},
                    {text: 'Fetch Bank Providers ⚠︎', link: '/dedicated-virtual-accounts/fetch-bank-providers'},
                ]
            },
            {
                text: 'Apple Pay',
                collapsed: true,
                items: [
                    {text: 'Register Domain ⚠︎', link: '/apple-pay/register-domain'},
                    {text: 'List Domains ⚠︎', link: '/apple-pay/list-domains'},
                    {text: 'Unregister Domain ⚠︎', link: '/apple-pay/unregister-domain'},
                ]
            },
            {
                text: 'Subaccounts',
                collapsed: true,
                items: [
                    {text: 'Create Subaccount ⚠︎', link: '/subaccounts/create-subaccount'},
                    {text: 'List Subaccounts ⚠︎', link: '/subaccounts/list-subaccounts'},
                    {text: 'Fetch Subaccount ⚠︎', link: '/subaccounts/fetch-subaccount'},
                    {text: 'Update Subaccount ⚠︎', link: '/subaccounts/update-subaccount'},
                ]
            },
            {
                text: 'Plans',
                collapsed: true,
                items: [
                    {text: 'Create Plan ⚠︎', link: '/plans/create-plan'},
                    {text: 'List Plans ⚠︎', link: '/plans/list-plans'},
                    {text: 'Fetch Plan ⚠︎', link: '/plans/fetch-plan'},
                    {text: 'Update Plan ⚠︎', link: '/plans/update-plan'},
                ]
            },
            {
                text: 'Subscriptions',
                collapsed: true,
                items: [
                    {text: 'Create Subscription ⚠︎', link: '/subscriptions/create-subscription'},
                    {text: 'List Subscriptions ⚠︎', link: '/subscriptions/list-subscriptions'},
                    {text: 'Fetch Subscription ⚠︎', link: '/subscriptions/fetch-subscription'},
                    {text: 'Enable Subscription ⚠︎', link: '/subscriptions/enable-subscription'},
                    {text: 'Disable Subscription ⚠︎', link: '/subscriptions/disable-subscription'},
                    {text: 'Generate Update Subscription Link ⚠︎', link: '/subscriptions/generate-update-subscription-link'},
                    {text: 'Send Update Subscription Link ⚠︎', link: '/subscriptions/send-update-subscription-link'},
                ]
            },
            {
                text: 'Products',
                collapsed: true,
                items: [
                    {text: 'Create Product ⚠︎', link: '/products/create-product'},
                    {text: 'List Products ⚠︎', link: '/products/list-products'},
                    {text: 'Fetch Product ⚠︎', link: '/products/fetch-product'},
                    {text: 'Update Product ⚠︎', link: '/products/update-product'},
                ]
            },
            {
                text: 'Payment Pages',
                collapsed: true,
                items: [
                    {text: 'Create Page ⚠︎', link: '/payment-pages/create-page'},
                    {text: 'List Pages ⚠︎', link: '/payment-pages/list-pages'},
                    {text: 'Fetch Page ⚠︎', link: '/payment-pages/fetch-page'},
                    {text: 'Update Page ⚠︎', link: '/payment-pages/update-page'},
                    {text: 'Check Slug Availability ⚠︎', link: '/payment-pages/check-slug-availability'},
                    {text: 'Add Products ⚠︎', link: '/payment-pages/add-products'},
                ]
            },
            {
                text: 'Payment Requests',
                collapsed: true,
                items: [
                    {text: 'Create Payment Request ⚠︎', link: '/payment-requests/create-payment-request'},
                    {text: 'List Payment Requests ⚠︎', link: '/payment-requests/list-payment-requests'},
                    {text: 'Fetch Payment Request ⚠︎', link: '/payment-requests/fetch-payment-request'},
                    {text: 'Verify Payment Request ⚠︎', link: '/payment-requests/verify-payment-request'},
                    {text: 'Send Notification ⚠︎', link: '/payment-requests/send-notification'},
                    {text: 'Payment Request Total ⚠︎', link: '/payment-requests/payment-request-total'},
                    {text: 'Finalize Payment Request ⚠︎', link: '/payment-requests/finalize-payment-request'},
                    {text: 'Update Payment Request ⚠︎', link: '/payment-requests/update-payment-request'},
                    {text: 'Archive Payment Request ⚠︎', link: '/payment-requests/archive-payment-request'},
                ]
            },
            {
                text: 'Settlements',
                collapsed: true,
                items: [
                    {text: 'List Settlements ⚠︎', link: '/settlements/list-settlements'},
                    {text: 'List Settlement Transactions ⚠︎', link: '/settlements/list-settlement-transactions'},
                ]
            },
            {
                text: 'Transfer Recipients',
                collapsed: true,
                items: [
                    {text: 'Create Transfer Recipient ⚠︎', link: '/transfer-recipients/create-transfer-recipient'},
                    {text: 'Bulk Create Transfer Recipient ⚠︎', link: '/transfer-recipients/bulk-create-transfer-recipient'},
                    {text: 'List Transfer Recipients ⚠︎', link: '/transfer-recipients/list-transfer-recipients'},
                    {text: 'Fetch Transfer Recipient ⚠︎', link: '/transfer-recipients/fetch-transfer-recipient'},
                    {text: 'Update Transfer Recipient ⚠︎', link: '/transfer-recipients/update-transfer-recipient'},
                    {text: 'Delete Transfer Recipient ⚠︎', link: '/transfer-recipients/delete-transfer-recipient'},
                ]
            },
            {
                text: 'Transfers',
                collapsed: true,
                items: [
                    {text: 'Initiate Transfer ⚠︎', link: '/transfers/initiate-transfer'},
                    {text: 'Finalize Transfer ⚠︎', link: '/transfers/finalize-transfer'},
                    {text: 'Initiate Bulk Transfer ⚠︎', link: '/transfers/initiate-bulk-transfer'},
                    {text: 'List Transfers ⚠︎', link: '/transfers/list-transfers'},
                    {text: 'Fetch Transfer ⚠︎', link: '/transfers/fetch-transfer'},
                    {text: 'Verify Transfer ⚠︎', link: '/transfers/verify-transfer'},
                ]
            },
            {
                text: 'Transfers Control',
                collapsed: true,
                items: [
                    {text: 'Check Balance ⚠︎', link: '/transfers-control/check-balance'},
                    {text: 'Fetch Balance Ledger ⚠︎', link: '/transfers-control/fetch-balance-ledger'},
                    {text: 'Resend Transfers OTP ⚠︎', link: '/transfers-control/resend-transfers-otp'},
                    {text: 'Disable Transfers OTP ⚠︎', link: '/transfers-control/disable-transfers-otp'},
                    {text: 'Finalize Disable OTP ⚠︎', link: '/transfers-control/finalize-disable-otp'},
                    {text: 'Enable Transfers OTP ⚠︎', link: '/transfers-control/enable-transfers-otp'},
                ]
            },
            {
                text: 'Bulk Charges',
                collapsed: true,
                items: [
                    {text: 'Initiate Bulk Charge ⚠︎', link: '/bulk-charges/initiate-bulk-charge'},
                    {text: 'List Bulk Charge Batches ⚠︎', link: '/bulk-charges/list-bulk-charge-batches'},
                    {text: 'Fetch Bulk Charge Batch ⚠︎', link: '/bulk-charges/fetch-bulk-charge-batch'},
                    {text: 'Fetch Charges in a Batch ⚠︎', link: '/bulk-charges/fetch-charges-in-a-batch'},
                    {text: 'Pause Bulk Charge Batch ⚠︎', link: '/bulk-charges/pause-bulk-charge-batch'},
                    {text: 'Resume Bulk Charge Batch ⚠︎', link: '/bulk-charges/resume-bulk-charge-batch'},
                ]
            },
            {
                text: 'Integration',
                collapsed: true,
                items: [
                    {text: 'Fetch Payment Session Timeout ⚠︎', link: '/integration/fetch-payment-session-timeout'},
                    {text: 'Update Payment Session Timeout ⚠︎', link: '/integration/update-payment-session-timeout'},
                ]
            },
            {
                text: 'Charge',
                collapsed: true,
                items: [
                    {text: 'Create Charge ⚠︎', link: '/charge/create-charge'},
                    {text: 'Submit PIN ⚠︎', link: '/charge/submit-pin'},
                    {text: 'Submit OTP ⚠︎', link: '/charge/submit-otp'},
                    {text: 'Submit Phone ⚠︎', link: '/charge/submit-phone'},
                    {text: 'Submit Birthday ⚠︎', link: '/charge/submit-birthday'},
                    {text: 'Submit Address ⚠︎', link: '/charge/submit-address'},
                    {text: 'Check Pending Charge ⚠︎', link: '/charge/check-pending-charge'},
                ]
            },
            {
                text: 'Disputes',
                collapsed: true,
                items: [
                    {text: 'List Disputes ⚠︎', link: '/disputes/list-disputes'},
                    {text: 'Fetch Dispute ⚠︎', link: '/disputes/fetch-dispute'},
                    {text: 'List Transaction Disputes ⚠︎', link: '/disputes/list-transaction-disputes'},
                    {text: 'Update Dispute ⚠︎', link: '/disputes/update-dispute'},
                    {text: 'Add Evidence ⚠︎', link: '/disputes/add-evidence'},
                    {text: 'Get Upload URL ⚠︎', link: '/disputes/get-upload-url'},
                    {text: 'Resolve a Dispute ⚠︎', link: '/disputes/resolve-a-dispute'},
                    {text: 'Export Disputes ⚠︎', link: '/disputes/export-disputes'},
                ]
            },
            {
                text: 'Refunds',
                collapsed: true,
                items: [
                    {text: 'Create Refund ⚠︎', link: '/refunds/create-refund'},
                    {text: 'List Refunds ⚠︎', link: '/refunds/list-refunds'},
                    {text: 'Fetch Refund ⚠︎', link: '/refunds/fetch-refund'},
                ]
            },
            {
                text: 'Verification',
                collapsed: true,
                items: [
                    {text: 'Resolve Account Number ⚠︎', link: '/verification/resolve-account-number'},
                    {text: 'Validate Account ⚠︎', link: '/verification/validate-account'},
                    {text: 'Resolve Card BIN ⚠︎', link: '/verification/resolve-card-bin'},
                ]
            },
            {
                text: 'Miscellaneous',
                collapsed: true,
                items: [
                    {text: 'List Banks ⚠︎', link: '/miscellaneous/list-banks'},
                    {text: 'List or Search Countries ⚠︎', link: '/miscellaneous/list-or-search-countries'},
                    {text: 'List States (AVS) ⚠︎', link: '/miscellaneous/list-states-avs'},
                ]
            }
        ],

        socialLinks: [
            {icon: 'github', link: 'https://github.com/njoguamos/laravel-paystack'}
        ],

        footer: {
            message: 'Released under the MIT License.',
            copyright: 'Copyright © 2025-present Njogu Amos'
        }
    }
})
