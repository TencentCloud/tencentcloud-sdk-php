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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Token Plan 企业版套餐调用明细项（字段与 CLS 日志对齐）
 *
 * @method string getUin() 获取主账号 UIN。
 * @method void setUin(string $Uin) 设置主账号 UIN。
 * @method string getModelName() 获取模型名称。
 * @method void setModelName(string $ModelName) 设置模型名称。
 * @method string getApiKeyId() 获取APIKey ID。
 * @method void setApiKeyId(string $ApiKeyId) 设置APIKey ID。
 * @method string getApiKeyName() 获取APIKey 名称。
 * @method void setApiKeyName(string $ApiKeyName) 设置APIKey 名称。
 * @method string getRequestId() 获取请求 ID。
 * @method void setRequestId(string $RequestId) 设置请求 ID。
 * @method string getRequestTime() 获取请求时间（RFC3339 格式）。
 * @method void setRequestTime(string $RequestTime) 设置请求时间（RFC3339 格式）。
 * @method integer getInputToken() 获取输入 token 数。
 * @method void setInputToken(integer $InputToken) 设置输入 token 数。
 * @method integer getCacheToken() 获取缓存 token 数。
 * @method void setCacheToken(integer $CacheToken) 设置缓存 token 数。
 * @method integer getOutputToken() 获取输出 token 数。
 * @method void setOutputToken(integer $OutputToken) 设置输出 token 数。
 * @method integer getTotalToken() 获取总 token 数。
 * @method void setTotalToken(integer $TotalToken) 设置总 token 数。
 * @method string getInputQuota() 获取未命中缓存输入消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
 * @method void setInputQuota(string $InputQuota) 设置未命中缓存输入消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
 * @method string getCacheQuota() 获取缓存消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
 * @method void setCacheQuota(string $CacheQuota) 设置缓存消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
 * @method string getOutputQuota() 获取输出消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
 * @method void setOutputQuota(string $OutputQuota) 设置输出消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
 * @method string getTotalQuota() 获取总消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
 * @method void setTotalQuota(string $TotalQuota) 设置总消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
 */
class UsageDetailItem extends AbstractModel
{
    /**
     * @var string 主账号 UIN。
     */
    public $Uin;

    /**
     * @var string 模型名称。
     */
    public $ModelName;

    /**
     * @var string APIKey ID。
     */
    public $ApiKeyId;

    /**
     * @var string APIKey 名称。
     */
    public $ApiKeyName;

    /**
     * @var string 请求 ID。
     */
    public $RequestId;

    /**
     * @var string 请求时间（RFC3339 格式）。
     */
    public $RequestTime;

    /**
     * @var integer 输入 token 数。
     */
    public $InputToken;

    /**
     * @var integer 缓存 token 数。
     */
    public $CacheToken;

    /**
     * @var integer 输出 token 数。
     */
    public $OutputToken;

    /**
     * @var integer 总 token 数。
     */
    public $TotalToken;

    /**
     * @var string 未命中缓存输入消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
     */
    public $InputQuota;

    /**
     * @var string 缓存消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
     */
    public $CacheQuota;

    /**
     * @var string 输出消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
     */
    public $OutputQuota;

    /**
     * @var string 总消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
     */
    public $TotalQuota;

    /**
     * @param string $Uin 主账号 UIN。
     * @param string $ModelName 模型名称。
     * @param string $ApiKeyId APIKey ID。
     * @param string $ApiKeyName APIKey 名称。
     * @param string $RequestId 请求 ID。
     * @param string $RequestTime 请求时间（RFC3339 格式）。
     * @param integer $InputToken 输入 token 数。
     * @param integer $CacheToken 缓存 token 数。
     * @param integer $OutputToken 输出 token 数。
     * @param integer $TotalToken 总 token 数。
     * @param string $InputQuota 未命中缓存输入消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
     * @param string $CacheQuota 缓存消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
     * @param string $OutputQuota 输出消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
     * @param string $TotalQuota 总消耗额度。单位说明如下：
- 套餐类型为专业套餐（enterprise），单位取值为积分；
- 套餐类型轻享套餐（enterprise-auto），单位取值为 token。
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
        }

        if (array_key_exists("ApiKeyName",$param) and $param["ApiKeyName"] !== null) {
            $this->ApiKeyName = $param["ApiKeyName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("RequestTime",$param) and $param["RequestTime"] !== null) {
            $this->RequestTime = $param["RequestTime"];
        }

        if (array_key_exists("InputToken",$param) and $param["InputToken"] !== null) {
            $this->InputToken = $param["InputToken"];
        }

        if (array_key_exists("CacheToken",$param) and $param["CacheToken"] !== null) {
            $this->CacheToken = $param["CacheToken"];
        }

        if (array_key_exists("OutputToken",$param) and $param["OutputToken"] !== null) {
            $this->OutputToken = $param["OutputToken"];
        }

        if (array_key_exists("TotalToken",$param) and $param["TotalToken"] !== null) {
            $this->TotalToken = $param["TotalToken"];
        }

        if (array_key_exists("InputQuota",$param) and $param["InputQuota"] !== null) {
            $this->InputQuota = $param["InputQuota"];
        }

        if (array_key_exists("CacheQuota",$param) and $param["CacheQuota"] !== null) {
            $this->CacheQuota = $param["CacheQuota"];
        }

        if (array_key_exists("OutputQuota",$param) and $param["OutputQuota"] !== null) {
            $this->OutputQuota = $param["OutputQuota"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }
    }
}
