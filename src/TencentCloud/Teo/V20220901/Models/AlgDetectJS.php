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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot主动特征识别客户端行为校验。
 *
 * @method string getName() 获取操作名称。
 * @method void setName(string $Name) 设置操作名称。
 * @method string getWorkLevel() 获取工作量证明 (proof_Of-Work)校验强度，默认low，取值有：
<li>low：低；</li>
<li>middle：中；</li>
<li>high：高。</li>
 * @method void setWorkLevel(string $WorkLevel) 设置工作量证明 (proof_Of-Work)校验强度，默认low，取值有：
<li>low：低；</li>
<li>middle：中；</li>
<li>high：高。</li>
 * @method integer getExecuteMode() 获取执行方式，js延迟执行的时间。单位为ms，默认500，取值：0～1000。
 * @method void setExecuteMode(integer $ExecuteMode) 设置执行方式，js延迟执行的时间。单位为ms，默认500，取值：0～1000。
 * @method integer getInvalidStatTime() 获取客户端末启用JS（末完成检测）统计周期。单位为秒，默认10，取值：5～3600。
 * @method void setInvalidStatTime(integer $InvalidStatTime) 设置客户端末启用JS（末完成检测）统计周期。单位为秒，默认10，取值：5～3600。
 * @method integer getInvalidThreshold() 获取客户端末启用JS（末完成检测）触发阈值。单位为次，默认300，取值：1～100000000。
 * @method void setInvalidThreshold(integer $InvalidThreshold) 设置客户端末启用JS（末完成检测）触发阈值。单位为次，默认300，取值：1～100000000。
 * @method array getAlgDetectResults() 获取Bot主动特征识别客户端行为校验结果。
 * @method void setAlgDetectResults(array $AlgDetectResults) 设置Bot主动特征识别客户端行为校验结果。
 */
class AlgDetectJS extends AbstractModel
{
    /**
     * @var string 操作名称。
     */
    public $Name;

    /**
     * @var string 工作量证明 (proof_Of-Work)校验强度，默认low，取值有：
<li>low：低；</li>
<li>middle：中；</li>
<li>high：高。</li>
     */
    public $WorkLevel;

    /**
     * @var integer 执行方式，js延迟执行的时间。单位为ms，默认500，取值：0～1000。
     */
    public $ExecuteMode;

    /**
     * @var integer 客户端末启用JS（末完成检测）统计周期。单位为秒，默认10，取值：5～3600。
     */
    public $InvalidStatTime;

    /**
     * @var integer 客户端末启用JS（末完成检测）触发阈值。单位为次，默认300，取值：1～100000000。
     */
    public $InvalidThreshold;

    /**
     * @var array Bot主动特征识别客户端行为校验结果。
     */
    public $AlgDetectResults;

    /**
     * @param string $Name 操作名称。
     * @param string $WorkLevel 工作量证明 (proof_Of-Work)校验强度，默认low，取值有：
<li>low：低；</li>
<li>middle：中；</li>
<li>high：高。</li>
     * @param integer $ExecuteMode 执行方式，js延迟执行的时间。单位为ms，默认500，取值：0～1000。
     * @param integer $InvalidStatTime 客户端末启用JS（末完成检测）统计周期。单位为秒，默认10，取值：5～3600。
     * @param integer $InvalidThreshold 客户端末启用JS（末完成检测）触发阈值。单位为次，默认300，取值：1～100000000。
     * @param array $AlgDetectResults Bot主动特征识别客户端行为校验结果。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("WorkLevel",$param) and $param["WorkLevel"] !== null) {
            $this->WorkLevel = $param["WorkLevel"];
        }

        if (array_key_exists("ExecuteMode",$param) and $param["ExecuteMode"] !== null) {
            $this->ExecuteMode = $param["ExecuteMode"];
        }

        if (array_key_exists("InvalidStatTime",$param) and $param["InvalidStatTime"] !== null) {
            $this->InvalidStatTime = $param["InvalidStatTime"];
        }

        if (array_key_exists("InvalidThreshold",$param) and $param["InvalidThreshold"] !== null) {
            $this->InvalidThreshold = $param["InvalidThreshold"];
        }

        if (array_key_exists("AlgDetectResults",$param) and $param["AlgDetectResults"] !== null) {
            $this->AlgDetectResults = [];
            foreach ($param["AlgDetectResults"] as $key => $value){
                $obj = new AlgDetectResult();
                $obj->deserialize($value);
                array_push($this->AlgDetectResults, $obj);
            }
        }
    }
}
