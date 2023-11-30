import antfu from '@antfu/eslint-config'

export default antfu({
  ignores: ['*.d.ts'],
  rules: {
    'unused-imports/no-unused-imports': 'warn',
    'antfu/top-level-function': 'off',
    'no-throw-literal': 'off',
    'no-console': 'off',
    'vue/component-name-in-template-casing': ['error', 'kebab-case', {
      registeredComponentsOnly: true,
      ignores: [],
    }],
    'vue/html-self-closing': ['error', {
      html: {
        void: 'any',
        normal: 'any',
        component: 'any',
      },
      svg: 'always',
      math: 'always',
    }],
  },
  vue: true,
  typescript: true,
  unocss: true,
  yaml: true,
})
