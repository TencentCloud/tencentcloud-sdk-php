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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型路由日志
 *
 * @method string getKeyId() 获取<p>API Key的ID</p>
 * @method void setKeyId(string $KeyId) 设置<p>API Key的ID</p>
 * @method string getModel() 获取<p>模型</p>
 * @method void setModel(string $Model) 设置<p>模型</p>
 * @method string getProvider() 获取<p>所属厂商</p>
 * @method void setProvider(string $Provider) 设置<p>所属厂商</p>
 * @method string getStatus() 获取<p>请求状态</p><p>枚举值：</p><ul><li>failure： 失败</li><li>success： 成功</li></ul>
 * @method void setStatus(string $Status) 设置<p>请求状态</p><p>枚举值：</p><ul><li>failure： 失败</li><li>success： 成功</li></ul>
 * @method integer getMaxRetries() 获取<p>最大重试次数</p>
 * @method void setMaxRetries(integer $MaxRetries) 设置<p>最大重试次数</p>
 * @method integer getTotalTokens() 获取<p>单次请求消耗的总Token数量</p>
 * @method void setTotalTokens(integer $TotalTokens) 设置<p>单次请求消耗的总Token数量</p>
 * @method integer getInputTokens() 获取<p>单次请求输入消耗的Token数量</p>
 * @method void setInputTokens(integer $InputTokens) 设置<p>单次请求输入消耗的Token数量</p>
 * @method integer getOutputTokens() 获取<p>单次请求输出消耗的Token数量</p>
 * @method void setOutputTokens(integer $OutputTokens) 设置<p>单次请求输出消耗的Token数量</p>
 * @method integer getRequestDuration() 获取<p>请求耗时</p><p>单位：ms</p>
 * @method void setRequestDuration(integer $RequestDuration) 设置<p>请求耗时</p><p>单位：ms</p>
 * @method string getRequesterIp() 获取<p>请求IP</p>
 * @method void setRequesterIp(string $RequesterIp) 设置<p>请求IP</p>
 * @method string getStartTime() 获取<p>日志查询起始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>日志查询起始时间</p>
 * @method string getEndTime() 获取<p>日志查询结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>日志查询结束时间</p>
 */
class ModelRouterLog extends AbstractModel
{
    /**
     * @var string <p>API Key的ID</p>
     */
    public $KeyId;

    /**
     * @var string <p>模型</p>
     */
    public $Model;

    /**
     * @var string <p>所属厂商</p>
     */
    public $Provider;

    /**
     * @var string <p>请求状态</p><p>枚举值：</p><ul><li>failure： 失败</li><li>success： 成功</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>最大重试次数</p>
     */
    public $MaxRetries;

    /**
     * @var integer <p>单次请求消耗的总Token数量</p>
     */
    public $TotalTokens;

    /**
     * @var integer <p>单次请求输入消耗的Token数量</p>
     */
    public $InputTokens;

    /**
     * @var integer <p>单次请求输出消耗的Token数量</p>
     */
    public $OutputTokens;

    /**
     * @var integer <p>请求耗时</p><p>单位：ms</p>
     */
    public $RequestDuration;

    /**
     * @var string <p>请求IP</p>
     */
    public $RequesterIp;

    /**
     * @var string <p>日志查询起始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>日志查询结束时间</p>
     */
    public $EndTime;

    /**
     * @param string $KeyId <p>API Key的ID</p>
     * @param string $Model <p>模型</p>
     * @param string $Provider <p>所属厂商</p>
     * @param string $Status <p>请求状态</p><p>枚举值：</p><ul><li>failure： 失败</li><li>success： 成功</li></ul>
     * @param integer $MaxRetries <p>最大重试次数</p>
     * @param integer $TotalTokens <p>单次请求消耗的总Token数量</p>
     * @param integer $InputTokens <p>单次请求输入消耗的Token数量</p>
     * @param integer $OutputTokens <p>单次请求输出消耗的Token数量</p>
     * @param integer $RequestDuration <p>请求耗时</p><p>单位：ms</p>
     * @param string $RequesterIp <p>请求IP</p>
     * @param string $StartTime <p>日志查询起始时间</p>
     * @param string $EndTime <p>日志查询结束时间</p>
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MaxRetries",$param) and $param["MaxRetries"] !== null) {
            $this->MaxRetries = $param["MaxRetries"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("RequestDuration",$param) and $param["RequestDuration"] !== null) {
            $this->RequestDuration = $param["RequestDuration"];
        }

        if (array_key_exists("RequesterIp",$param) and $param["RequesterIp"] !== null) {
            $this->RequesterIp = $param["RequesterIp"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
