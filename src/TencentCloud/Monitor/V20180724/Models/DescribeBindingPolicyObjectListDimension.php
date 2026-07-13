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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBindingPolicyObjectList接口的Dimension
 *
 * @method integer getRegionId() 获取<p>地域id</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域id</p>
 * @method string getRegion() 获取<p>地域简称</p>
 * @method void setRegion(string $Region) 设置<p>地域简称</p>
 * @method string getDimensions() 获取<p>维度组合json字符串</p>
 * @method void setDimensions(string $Dimensions) 设置<p>维度组合json字符串</p>
 * @method string getEventDimensions() 获取<p>事件维度组合json字符串</p>
 * @method void setEventDimensions(string $EventDimensions) 设置<p>事件维度组合json字符串</p>
 */
class DescribeBindingPolicyObjectListDimension extends AbstractModel
{
    /**
     * @var integer <p>地域id</p>
     */
    public $RegionId;

    /**
     * @var string <p>地域简称</p>
     */
    public $Region;

    /**
     * @var string <p>维度组合json字符串</p>
     */
    public $Dimensions;

    /**
     * @var string <p>事件维度组合json字符串</p>
     */
    public $EventDimensions;

    /**
     * @param integer $RegionId <p>地域id</p>
     * @param string $Region <p>地域简称</p>
     * @param string $Dimensions <p>维度组合json字符串</p>
     * @param string $EventDimensions <p>事件维度组合json字符串</p>
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("EventDimensions",$param) and $param["EventDimensions"] !== null) {
            $this->EventDimensions = $param["EventDimensions"];
        }
    }
}
