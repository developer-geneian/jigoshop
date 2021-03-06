<?php
// Load the plugin
require_once('classes/abstract/jigoshop_base.class.php');
require_once('classes/abstract/jigoshop_singleton.class.php');
require_once('classes/jigoshop_cart.class.php');
require_once('classes/jigoshop_session.class.php');

/**
 * Test class for jigoshop_cart.
 * Generated by PHPUnit on 2012-04-17 at 02:59:59.
 */
class WP_Test_Jigoshop_Cart extends WP_UnitTestCase {

    /**
     * @var jigoshop_cart
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp() {
        $this->object = jigoshop_cart::instance();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    public function tearDown() {

    }

    /**
     * @covers jigoshop_cart::get_cart_from_session
     * @todo Implement testGet_cart_from_session().
     */
    public function testGet_cart_from_session() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::set_session
     * @todo Implement testSet_session().
     */
    public function testSet_session() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::empty_cart
     * @todo Implement testEmpty_cart().
     */
    public function testEmpty_cart() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::generate_cart_id
     * @todo Implement testGenerate_cart_id().
     */
    public function testGenerate_cart_id() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::find_product_in_cart
     * @todo Implement testFind_product_in_cart().
     */
    public function testFind_product_in_cart() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::add_to_cart
     * @todo Implement testAdd_to_cart().
     */
    public function testAdd_to_cart() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::set_quantity
     * @todo Implement testSet_quantity().
     */
    public function testSet_quantity() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_cart
     * @todo Implement testGet_cart().
     */
    public function testGet_cart() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_cross_sells
     * @todo Implement testGet_cross_sells().
     */
    public function testGet_cross_sells() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_cart_url
     * @todo Implement testGet_cart_url().
     */
    public function testGet_cart_url() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_checkout_url
     * @todo Implement testGet_checkout_url().
     */
    public function testGet_checkout_url() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_shop_url
     * @todo Implement testGet_shop_url().
     */
    public function testGet_shop_url() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_remove_url
     * @todo Implement testGet_remove_url().
     */
    public function testGet_remove_url() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::needs_shipping
     * @todo Implement testNeeds_shipping().
     */
    public function testNeeds_shipping() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::ship_to_billing_address_only
     * @todo Implement testShip_to_billing_address_only().
     */
    public function testShip_to_billing_address_only() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::needs_payment
     * @todo Implement testNeeds_payment().
     */
    public function testNeeds_payment() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::check_cart_item_stock
     * @todo Implement testCheck_cart_item_stock().
     */
    public function testCheck_cart_item_stock() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::reset_totals
     * @todo Implement testReset_totals().
     */
    public function testReset_totals() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::calculate_totals
     * @todo Implement testCalculate_totals().
     */
    public function testCalculate_totals() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_price_per_tax_class_ex_tax
     * @todo Implement testGet_price_per_tax_class_ex_tax().
     */
    public function testGet_price_per_tax_class_ex_tax() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_cart_contents_total_excluding_tax
     * @todo Implement testGet_cart_contents_total_excluding_tax().
     */
    public function testGet_cart_contents_total_excluding_tax() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_total
     * @todo Implement testGet_total().
     */
    public function testGet_total() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_cart_total
     * @todo Implement testGet_cart_total().
     */
    public function testGet_cart_total() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_cart_subtotal
     * @todo Implement testGet_cart_subtotal().
     */
    public function testGet_cart_subtotal() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_tax_for_display
     * @todo Implement testGet_tax_for_display().
     */
    public function testGet_tax_for_display() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_total_tax_rate
     * @todo Implement testGet_total_tax_rate().
     */
    public function testGet_total_tax_rate() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_taxes_as_array
     * @todo Implement testGet_taxes_as_array().
     */
    public function testGet_taxes_as_array() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::has_compound_tax
     * @todo Implement testHas_compound_tax().
     */
    public function testHas_compound_tax() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_taxes_as_string
     * @todo Implement testGet_taxes_as_string().
     */
    public function testGet_taxes_as_string() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_applied_tax_classes
     * @todo Implement testGet_applied_tax_classes().
     */
    public function testGet_applied_tax_classes() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_tax_rate
     * @todo Implement testGet_tax_rate().
     */
    public function testGet_tax_rate() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_tax_amount
     * @todo Implement testGet_tax_amount().
     */
    public function testGet_tax_amount() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_tax_divisor
     * @todo Implement testGet_tax_divisor().
     */
    public function testGet_tax_divisor() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::is_not_compounded_tax
     * @todo Implement testIs_not_compounded_tax().
     */
    public function testIs_not_compounded_tax() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_cart_shipping_total
     * @todo Implement testGet_cart_shipping_total().
     */
    public function testGet_cart_shipping_total() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_cart_shipping_title
     * @todo Implement testGet_cart_shipping_title().
     */
    public function testGet_cart_shipping_title() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::add_discount
     * @todo Implement testAdd_discount().
     */
    public function testAdd_discount() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::has_valid_coupon_for_products
     * @todo Implement testHas_valid_coupon_for_products().
     */
    public function testHas_valid_coupon_for_products() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::has_discount
     * @todo Implement testHas_discount().
     */
    public function testHas_discount() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_total_discount
     * @todo Implement testGet_total_discount().
     */
    public function testGet_total_discount() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers jigoshop_cart::get_item_data
     * @todo Implement testGet_item_data().
     */
    public function testGet_item_data() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}

?>
