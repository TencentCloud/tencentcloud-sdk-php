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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFOOMMallocProblemDetail请求参数结构体
 *
 * @method string getProductId() 获取<p>产品Id</p>
 * @method void setProductId(string $ProductId) 设置<p>产品Id</p>
 * @method string getClientIdentify() 获取<p>消息唯一标识</p>
 * @method void setClientIdentify(string $ClientIdentify) 设置<p>消息唯一标识</p>
 * @method string getFeature() 获取<p>特征</p>
 * @method void setFeature(string $Feature) 设置<p>特征</p>
 * @method integer getStartEventTime() 获取<p>事件开始时间</p>
 * @method void setStartEventTime(integer $StartEventTime) 设置<p>事件开始时间</p>
 * @method integer getEndEventTime() 获取<p>事件结束时间</p>
 * @method void setEndEventTime(integer $EndEventTime) 设置<p>事件结束时间</p>
 * @method string getExtraData() 获取<p>拓展数据</p>
 * @method void setExtraData(string $ExtraData) 设置<p>拓展数据</p>
 * @method string getRequestHeader() 获取<p>请求头</p>
 * @method void setRequestHeader(string $RequestHeader) 设置<p>请求头</p>
 */
class DescribeFOOMMallocProblemDetailRequest extends AbstractModel
{
    /**
     * @var string <p>产品Id</p>
     */
    public $ProductId;

    /**
     * @var string <p>消息唯一标识</p>
     */
    public $ClientIdentify;

    /**
     * @var string <p>特征</p>
     */
    public $Feature;

    /**
     * @var integer <p>事件开始时间</p>
     */
    public $StartEventTime;

    /**
     * @var integer <p>事件结束时间</p>
     */
    public $EndEventTime;

    /**
     * @var string <p>拓展数据</p>
     */
    public $ExtraData;

    /**
     * @var string <p>请求头</p>
     */
    public $RequestHeader;

    /**
     * @param string $ProductId <p>产品Id</p>
     * @param string $ClientIdentify <p>消息唯一标识</p>
     * @param string $Feature <p>特征</p>
     * @param integer $StartEventTime <p>事件开始时间</p>
     * @param integer $EndEventTime <p>事件结束时间</p>
     * @param string $ExtraData <p>拓展数据</p>
     * @param string $RequestHeader <p>请求头</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ClientIdentify",$param) and $param["ClientIdentify"] !== null) {
            $this->ClientIdentify = $param["ClientIdentify"];
        }

        if (array_key_exists("Feature",$param) and $param["Feature"] !== null) {
            $this->Feature = $param["Feature"];
        }

        if (array_key_exists("StartEventTime",$param) and $param["StartEventTime"] !== null) {
            $this->StartEventTime = $param["StartEventTime"];
        }

        if (array_key_exists("EndEventTime",$param) and $param["EndEventTime"] !== null) {
            $this->EndEventTime = $param["EndEventTime"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = $param["RequestHeader"];
        }
    }
}
