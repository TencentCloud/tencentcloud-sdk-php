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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回执数据统计响应包体
 *
 * @method integer getCallbackCount() 获取<p>短信回执量统计。</p><p>单位：数</p>
 * @method void setCallbackCount(integer $CallbackCount) 设置<p>短信回执量统计。</p><p>单位：数</p>
 * @method integer getRequestSuccessCount() 获取<p>短信提交成功量统计。</p><p>单位：数</p>
 * @method void setRequestSuccessCount(integer $RequestSuccessCount) 设置<p>短信提交成功量统计。</p><p>单位：数</p>
 * @method integer getCallbackFailCount() 获取<p>短信回执失败量统计。</p><p>单位：数</p>
 * @method void setCallbackFailCount(integer $CallbackFailCount) 设置<p>短信回执失败量统计。</p><p>单位：数</p>
 * @method integer getCallbackSuccessCount() 获取<p>短信回执成功量统计。</p><p>单位：数</p>
 * @method void setCallbackSuccessCount(integer $CallbackSuccessCount) 设置<p>短信回执成功量统计。</p><p>单位：数</p>
 * @method integer getInternalErrorCount() 获取<p>运营商内部错误统计。</p><p>单位：数</p>
 * @method void setInternalErrorCount(integer $InternalErrorCount) 设置<p>运营商内部错误统计。</p><p>单位：数</p>
 * @method integer getInvalidNumberCount() 获取<p>号码无效或空号统计。</p><p>单位：数</p>
 * @method void setInvalidNumberCount(integer $InvalidNumberCount) 设置<p>号码无效或空号统计。</p><p>单位：数</p>
 * @method integer getShutdownErrorCount() 获取<p>停机、关机等错误统计。</p><p>单位：数</p>
 * @method void setShutdownErrorCount(integer $ShutdownErrorCount) 设置<p>停机、关机等错误统计。</p><p>单位：数</p>
 * @method integer getBlackListCount() 获取<p>号码拉入免打扰名单统计。</p><p>单位：数</p>
 * @method void setBlackListCount(integer $BlackListCount) 设置<p>号码拉入免打扰名单统计。</p><p>单位：数</p>
 * @method integer getFrequencyLimitCount() 获取<p>运营商频率限制统计。</p><p>单位：数</p>
 * @method void setFrequencyLimitCount(integer $FrequencyLimitCount) 设置<p>运营商频率限制统计。</p><p>单位：数</p>
 */
class CallbackStatusStatistics extends AbstractModel
{
    /**
     * @var integer <p>短信回执量统计。</p><p>单位：数</p>
     */
    public $CallbackCount;

    /**
     * @var integer <p>短信提交成功量统计。</p><p>单位：数</p>
     */
    public $RequestSuccessCount;

    /**
     * @var integer <p>短信回执失败量统计。</p><p>单位：数</p>
     */
    public $CallbackFailCount;

    /**
     * @var integer <p>短信回执成功量统计。</p><p>单位：数</p>
     */
    public $CallbackSuccessCount;

    /**
     * @var integer <p>运营商内部错误统计。</p><p>单位：数</p>
     */
    public $InternalErrorCount;

    /**
     * @var integer <p>号码无效或空号统计。</p><p>单位：数</p>
     */
    public $InvalidNumberCount;

    /**
     * @var integer <p>停机、关机等错误统计。</p><p>单位：数</p>
     */
    public $ShutdownErrorCount;

    /**
     * @var integer <p>号码拉入免打扰名单统计。</p><p>单位：数</p>
     */
    public $BlackListCount;

    /**
     * @var integer <p>运营商频率限制统计。</p><p>单位：数</p>
     */
    public $FrequencyLimitCount;

    /**
     * @param integer $CallbackCount <p>短信回执量统计。</p><p>单位：数</p>
     * @param integer $RequestSuccessCount <p>短信提交成功量统计。</p><p>单位：数</p>
     * @param integer $CallbackFailCount <p>短信回执失败量统计。</p><p>单位：数</p>
     * @param integer $CallbackSuccessCount <p>短信回执成功量统计。</p><p>单位：数</p>
     * @param integer $InternalErrorCount <p>运营商内部错误统计。</p><p>单位：数</p>
     * @param integer $InvalidNumberCount <p>号码无效或空号统计。</p><p>单位：数</p>
     * @param integer $ShutdownErrorCount <p>停机、关机等错误统计。</p><p>单位：数</p>
     * @param integer $BlackListCount <p>号码拉入免打扰名单统计。</p><p>单位：数</p>
     * @param integer $FrequencyLimitCount <p>运营商频率限制统计。</p><p>单位：数</p>
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
        if (array_key_exists("CallbackCount",$param) and $param["CallbackCount"] !== null) {
            $this->CallbackCount = $param["CallbackCount"];
        }

        if (array_key_exists("RequestSuccessCount",$param) and $param["RequestSuccessCount"] !== null) {
            $this->RequestSuccessCount = $param["RequestSuccessCount"];
        }

        if (array_key_exists("CallbackFailCount",$param) and $param["CallbackFailCount"] !== null) {
            $this->CallbackFailCount = $param["CallbackFailCount"];
        }

        if (array_key_exists("CallbackSuccessCount",$param) and $param["CallbackSuccessCount"] !== null) {
            $this->CallbackSuccessCount = $param["CallbackSuccessCount"];
        }

        if (array_key_exists("InternalErrorCount",$param) and $param["InternalErrorCount"] !== null) {
            $this->InternalErrorCount = $param["InternalErrorCount"];
        }

        if (array_key_exists("InvalidNumberCount",$param) and $param["InvalidNumberCount"] !== null) {
            $this->InvalidNumberCount = $param["InvalidNumberCount"];
        }

        if (array_key_exists("ShutdownErrorCount",$param) and $param["ShutdownErrorCount"] !== null) {
            $this->ShutdownErrorCount = $param["ShutdownErrorCount"];
        }

        if (array_key_exists("BlackListCount",$param) and $param["BlackListCount"] !== null) {
            $this->BlackListCount = $param["BlackListCount"];
        }

        if (array_key_exists("FrequencyLimitCount",$param) and $param["FrequencyLimitCount"] !== null) {
            $this->FrequencyLimitCount = $param["FrequencyLimitCount"];
        }
    }
}
