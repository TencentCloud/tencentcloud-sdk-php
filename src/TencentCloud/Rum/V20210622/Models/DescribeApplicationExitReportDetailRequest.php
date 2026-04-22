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
 * DescribeApplicationExitReportDetail请求参数结构体
 *
 * @method string getProductId() 获取<p>产品Id</p>
 * @method void setProductId(string $ProductId) 设置<p>产品Id</p>
 * @method string getParamToken() 获取<p>提供给前端使用，当填写本字段时，会覆盖 formlist 的值</p>
 * @method void setParamToken(string $ParamToken) 设置<p>提供给前端使用，当填写本字段时，会覆盖 formlist 的值</p>
 * @method string getClientIdentify() 获取<p>问题Id</p>
 * @method void setClientIdentify(string $ClientIdentify) 设置<p>问题Id</p>
 * @method integer getStartEventTime() 获取<p>开始时间</p>
 * @method void setStartEventTime(integer $StartEventTime) 设置<p>开始时间</p>
 * @method integer getEndEventTime() 获取<p>结束时间</p>
 * @method void setEndEventTime(integer $EndEventTime) 设置<p>结束时间</p>
 * @method string getExtraData() 获取<p>拓展数据</p>
 * @method void setExtraData(string $ExtraData) 设置<p>拓展数据</p>
 * @method string getRequestHeader() 获取<p>请求头</p>
 * @method void setRequestHeader(string $RequestHeader) 设置<p>请求头</p>
 */
class DescribeApplicationExitReportDetailRequest extends AbstractModel
{
    /**
     * @var string <p>产品Id</p>
     */
    public $ProductId;

    /**
     * @var string <p>提供给前端使用，当填写本字段时，会覆盖 formlist 的值</p>
     */
    public $ParamToken;

    /**
     * @var string <p>问题Id</p>
     */
    public $ClientIdentify;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartEventTime;

    /**
     * @var integer <p>结束时间</p>
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
     * @param string $ParamToken <p>提供给前端使用，当填写本字段时，会覆盖 formlist 的值</p>
     * @param string $ClientIdentify <p>问题Id</p>
     * @param integer $StartEventTime <p>开始时间</p>
     * @param integer $EndEventTime <p>结束时间</p>
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

        if (array_key_exists("ParamToken",$param) and $param["ParamToken"] !== null) {
            $this->ParamToken = $param["ParamToken"];
        }

        if (array_key_exists("ClientIdentify",$param) and $param["ClientIdentify"] !== null) {
            $this->ClientIdentify = $param["ClientIdentify"];
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
