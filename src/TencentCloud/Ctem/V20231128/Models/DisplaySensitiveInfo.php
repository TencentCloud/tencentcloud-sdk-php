<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 敏感信息泄露数据
 *
 * @method integer getId() 获取<p>主键Id</p>
 * @method void setId(integer $Id) 设置<p>主键Id</p>
 * @method string getType() 获取<p>类型</p>
 * @method void setType(string $Type) 设置<p>类型</p>
 * @method string getSource() 获取<p>来源</p>
 * @method void setSource(string $Source) 设置<p>来源</p>
 * @method string getValue() 获取<p>值</p>
 * @method void setValue(string $Value) 设置<p>值</p>
 * @method DisplayToolCommon getDisplayToolCommon() 获取<p>公共字段</p>
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置<p>公共字段</p>
 * @method integer getIsCloudAsset() 获取<p>是否为云资产：0-非云资产 1-是云资产</p>
 * @method void setIsCloudAsset(integer $IsCloudAsset) 设置<p>是否为云资产：0-非云资产 1-是云资产</p>
 * @method integer getCloudAssetStatus() 获取<p>云资产是否下线：-1-已下线 0-正常</p>
 * @method void setCloudAssetStatus(integer $CloudAssetStatus) 设置<p>云资产是否下线：-1-已下线 0-正常</p>
 * @method integer getAggregationCount() 获取<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 * @method void setAggregationCount(integer $AggregationCount) 设置<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 */
class DisplaySensitiveInfo extends AbstractModel
{
    /**
     * @var integer <p>主键Id</p>
     */
    public $Id;

    /**
     * @var string <p>类型</p>
     */
    public $Type;

    /**
     * @var string <p>来源</p>
     */
    public $Source;

    /**
     * @var string <p>值</p>
     */
    public $Value;

    /**
     * @var DisplayToolCommon <p>公共字段</p>
     */
    public $DisplayToolCommon;

    /**
     * @var integer <p>是否为云资产：0-非云资产 1-是云资产</p>
     */
    public $IsCloudAsset;

    /**
     * @var integer <p>云资产是否下线：-1-已下线 0-正常</p>
     */
    public $CloudAssetStatus;

    /**
     * @var integer <p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
     */
    public $AggregationCount;

    /**
     * @param integer $Id <p>主键Id</p>
     * @param string $Type <p>类型</p>
     * @param string $Source <p>来源</p>
     * @param string $Value <p>值</p>
     * @param DisplayToolCommon $DisplayToolCommon <p>公共字段</p>
     * @param integer $IsCloudAsset <p>是否为云资产：0-非云资产 1-是云资产</p>
     * @param integer $CloudAssetStatus <p>云资产是否下线：-1-已下线 0-正常</p>
     * @param integer $AggregationCount <p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("IsCloudAsset",$param) and $param["IsCloudAsset"] !== null) {
            $this->IsCloudAsset = $param["IsCloudAsset"];
        }

        if (array_key_exists("CloudAssetStatus",$param) and $param["CloudAssetStatus"] !== null) {
            $this->CloudAssetStatus = $param["CloudAssetStatus"];
        }

        if (array_key_exists("AggregationCount",$param) and $param["AggregationCount"] !== null) {
            $this->AggregationCount = $param["AggregationCount"];
        }
    }
}
