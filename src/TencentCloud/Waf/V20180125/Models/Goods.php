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
 * @method integer getPayMode() 获取付费类型，1:预付费，0:后付费
 * @method void setPayMode(integer $PayMode) 设置付费类型，1:预付费，0:后付费
 * @method integer getGoodsNum() 获取商品数量
 * @method void setGoodsNum(integer $GoodsNum) 设置商品数量
 * @method GoodsDetail getGoodsDetail() 获取商品明细
 * @method void setGoodsDetail(GoodsDetail $GoodsDetail) 设置商品明细
 * @method integer getProjectId() 获取默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGoodsCategoryId() 获取计费类目ID，对应cid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsCategoryId(integer $GoodsCategoryId) 设置计费类目ID，对应cid
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPlatform() 获取平台类型，默认1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlatform(integer $Platform) 设置平台类型，默认1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取购买waf实例区域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置购买waf实例区域ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class Goods extends AbstractModel
{
    /**
     * @var integer 付费类型，1:预付费，0:后付费
     */
    public $PayMode;

    /**
     * @var integer 商品数量
     */
    public $GoodsNum;

    /**
     * @var GoodsDetail 商品明细
     */
    public $GoodsDetail;

    /**
     * @var integer 默认为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 计费类目ID，对应cid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsCategoryId;

    /**
     * @var integer 平台类型，默认1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Platform;

    /**
     * @var integer 购买waf实例区域ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @param integer $PayMode 付费类型，1:预付费，0:后付费
     * @param integer $GoodsNum 商品数量
     * @param GoodsDetail $GoodsDetail 商品明细
     * @param integer $ProjectId 默认为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GoodsCategoryId 计费类目ID，对应cid
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Platform 平台类型，默认1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId 购买waf实例区域ID
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("GoodsDetail",$param) and $param["GoodsDetail"] !== null) {
            $this->GoodsDetail = new GoodsDetail();
            $this->GoodsDetail->deserialize($param["GoodsDetail"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GoodsCategoryId",$param) and $param["GoodsCategoryId"] !== null) {
            $this->GoodsCategoryId = $param["GoodsCategoryId"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
