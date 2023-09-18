<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费下单接口出入参Goods
 *
 * @method integer getGoodsNum() 获取商品数量
 * @method void setGoodsNum(integer $GoodsNum) 设置商品数量
 * @method GoodsDetailNew getGoodsDetail() 获取商品明细
 * @method void setGoodsDetail(GoodsDetailNew $GoodsDetail) 设置商品明细
 * @method integer getGoodsCategoryId() 获取订单类型ID，用来唯一标识一个业务的一种场景（总共三种场景：新购、配置变更、续费）
高级版: 102375(新购),102376(续费),102377(变配)
企业版 : 102378(新购),102379(续费),102380(变配)
旗舰版 : 102369(新购),102370(续费),102371(变配)
域名包 : 102372(新购),102373(续费),102374(变配)
业务扩展包 : 101040(新购),101041(续费),101042(变配)

高级版-CLB: 新购 101198  续费 101199 变配 101200
企业版-CLB 101204(新购),101205(续费),101206(变配)
旗舰版-CLB : 101201(新购),101202(续费),101203(变配)
域名包-CLB: 101207(新购),101208(续费),101209(变配)
业务扩展包-CLB: 101210(新购),101211(续费),101212(变配)

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsCategoryId(integer $GoodsCategoryId) 设置订单类型ID，用来唯一标识一个业务的一种场景（总共三种场景：新购、配置变更、续费）
高级版: 102375(新购),102376(续费),102377(变配)
企业版 : 102378(新购),102379(续费),102380(变配)
旗舰版 : 102369(新购),102370(续费),102371(变配)
域名包 : 102372(新购),102373(续费),102374(变配)
业务扩展包 : 101040(新购),101041(续费),101042(变配)

高级版-CLB: 新购 101198  续费 101199 变配 101200
企业版-CLB 101204(新购),101205(续费),101206(变配)
旗舰版-CLB : 101201(新购),101202(续费),101203(变配)
域名包-CLB: 101207(新购),101208(续费),101209(变配)
业务扩展包-CLB: 101210(新购),101211(续费),101212(变配)

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取购买waf实例区域ID
1 表示购买大陆资源;
9表示购买非中国大陆资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置购买waf实例区域ID
1 表示购买大陆资源;
9表示购买非中国大陆资源
注意：此字段可能返回 null，表示取不到有效值。
 */
class GoodNews extends AbstractModel
{
    /**
     * @var integer 商品数量
     */
    public $GoodsNum;

    /**
     * @var GoodsDetailNew 商品明细
     */
    public $GoodsDetail;

    /**
     * @var integer 订单类型ID，用来唯一标识一个业务的一种场景（总共三种场景：新购、配置变更、续费）
高级版: 102375(新购),102376(续费),102377(变配)
企业版 : 102378(新购),102379(续费),102380(变配)
旗舰版 : 102369(新购),102370(续费),102371(变配)
域名包 : 102372(新购),102373(续费),102374(变配)
业务扩展包 : 101040(新购),101041(续费),101042(变配)

高级版-CLB: 新购 101198  续费 101199 变配 101200
企业版-CLB 101204(新购),101205(续费),101206(变配)
旗舰版-CLB : 101201(新购),101202(续费),101203(变配)
域名包-CLB: 101207(新购),101208(续费),101209(变配)
业务扩展包-CLB: 101210(新购),101211(续费),101212(变配)

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsCategoryId;

    /**
     * @var integer 购买waf实例区域ID
1 表示购买大陆资源;
9表示购买非中国大陆资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @param integer $GoodsNum 商品数量
     * @param GoodsDetailNew $GoodsDetail 商品明细
     * @param integer $GoodsCategoryId 订单类型ID，用来唯一标识一个业务的一种场景（总共三种场景：新购、配置变更、续费）
高级版: 102375(新购),102376(续费),102377(变配)
企业版 : 102378(新购),102379(续费),102380(变配)
旗舰版 : 102369(新购),102370(续费),102371(变配)
域名包 : 102372(新购),102373(续费),102374(变配)
业务扩展包 : 101040(新购),101041(续费),101042(变配)

高级版-CLB: 新购 101198  续费 101199 变配 101200
企业版-CLB 101204(新购),101205(续费),101206(变配)
旗舰版-CLB : 101201(新购),101202(续费),101203(变配)
域名包-CLB: 101207(新购),101208(续费),101209(变配)
业务扩展包-CLB: 101210(新购),101211(续费),101212(变配)

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId 购买waf实例区域ID
1 表示购买大陆资源;
9表示购买非中国大陆资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("GoodsDetail",$param) and $param["GoodsDetail"] !== null) {
            $this->GoodsDetail = new GoodsDetailNew();
            $this->GoodsDetail->deserialize($param["GoodsDetail"]);
        }

        if (array_key_exists("GoodsCategoryId",$param) and $param["GoodsCategoryId"] !== null) {
            $this->GoodsCategoryId = $param["GoodsCategoryId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
