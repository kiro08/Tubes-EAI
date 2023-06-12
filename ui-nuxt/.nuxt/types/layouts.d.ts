import { ComputedRef, Ref } from 'vue'
export type LayoutKey = "default"
declare module "C:/xampp/htdocs/Tubes-EAI/ui-nuxt/node_modules/nuxt/dist/pages/runtime/composables" {
  interface PageMeta {
    layout?: false | LayoutKey | Ref<LayoutKey> | ComputedRef<LayoutKey>
  }
}