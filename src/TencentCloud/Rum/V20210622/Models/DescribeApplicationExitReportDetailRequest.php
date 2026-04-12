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
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getParamToken() 获取提供给前端使用，当填写本字段时，会覆盖 formlist 的值
 * @method void setParamToken(string $ParamToken) 设置提供给前端使用，当填写本字段时，会覆盖 formlist 的值
 * @method string getClientIdentify() 获取问题Id
 * @method void setClientIdentify(string $ClientIdentify) 设置问题Id
 * @method integer getStartEventTime() 获取开始时间
 * @method void setStartEventTime(integer $StartEventTime) 设置开始时间
 * @method integer getEndEventTime() 获取结束时间
 * @method void setEndEventTime(integer $EndEventTime) 设置结束时间
 * @method string getExtraData() 获取拓展数据
 * @method void setExtraData(string $ExtraData) 设置拓展数据
 * @method string getRequestHeader() 获取请求头
 * @method void setRequestHeader(string $RequestHeader) 设置请求头
 */
class DescribeApplicationExitReportDetailRequest extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 提供给前端使用，当填写本字段时，会覆盖 formlist 的值
     */
    public $ParamToken;

    /**
     * @var string 问题Id
     */
    public $ClientIdentify;

    /**
     * @var integer 开始时间
     */
    public $StartEventTime;

    /**
     * @var integer 结束时间
     */
    public $EndEventTime;

    /**
     * @var string 拓展数据
     */
    public $ExtraData;

    /**
     * @var string 请求头
     */
    public $RequestHeader;

    /**
     * @param string $ProductId 产品Id
     * @param string $ParamToken 提供给前端使用，当填写本字段时，会覆盖 formlist 的值
     * @param string $ClientIdentify 问题Id
     * @param integer $StartEventTime 开始时间
     * @param integer $EndEventTime 结束时间
     * @param string $ExtraData 拓展数据
     * @param string $RequestHeader 请求头
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
