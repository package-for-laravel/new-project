import { shallowMount } from "@vue/test-utils";
import ExampleComponent from "./ExampleComponent.vue";

describe("ExampleComponent.vue", () => {
  it("matches its snapshot", () => {
    const wrapper = shallowMount(ExampleComponent);
    expect(wrapper.element).toMatchSnapshot();
  });
});
