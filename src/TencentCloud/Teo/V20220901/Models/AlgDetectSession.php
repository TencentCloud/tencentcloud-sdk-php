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
 * Cookie校验与会话跟踪。
 *
 * @method string getName() 获取操作名称。
 * @method void setName(string $Name) 设置操作名称。
 * @method string getDetectMode() 获取校验方式，默认update_detect，取值有：
<li>detect：仅校验；</li>
<li>update_detect：更新Cookie并校验。</li>
 * @method void setDetectMode(string $DetectMode) 设置校验方式，默认update_detect，取值有：
<li>detect：仅校验；</li>
<li>update_detect：更新Cookie并校验。</li>
 * @method string getSessionAnalyzeSwitch() 获取会话速率和周期特征校验开关，默认off，取值有：
<li>off：关闭；</li>
<li>on：打开。</li>
 * @method void setSessionAnalyzeSwitch(string $SessionAnalyzeSwitch) 设置会话速率和周期特征校验开关，默认off，取值有：
<li>off：关闭；</li>
<li>on：打开。</li>
 * @method integer getInvalidStatTime() 获取校验结果为未携带Cookie或Cookie已过期的统计周期。单位为秒，默认10，取值：5～3600。
 * @method void setInvalidStatTime(integer $InvalidStatTime) 设置校验结果为未携带Cookie或Cookie已过期的统计周期。单位为秒，默认10，取值：5～3600。
 * @method integer getInvalidThreshold() 获取校验结果为未携带Cookie或Cookie已过期的触发阈值。单位为次，默认300，取值：1～100000000。
 * @method void setInvalidThreshold(integer $InvalidThreshold) 设置校验结果为未携带Cookie或Cookie已过期的触发阈值。单位为次，默认300，取值：1～100000000。
 * @method array getAlgDetectResults() 获取Cookie校验校验结果。
 * @method void setAlgDetectResults(array $AlgDetectResults) 设置Cookie校验校验结果。
 * @method array getSessionBehaviors() 获取会话速率和周期特征校验结果。
 * @method void setSessionBehaviors(array $SessionBehaviors) 设置会话速率和周期特征校验结果。
 */
class AlgDetectSession extends AbstractModel
{
    /**
     * @var string 操作名称。
     */
    public $Name;

    /**
     * @var string 校验方式，默认update_detect，取值有：
<li>detect：仅校验；</li>
<li>update_detect：更新Cookie并校验。</li>
     */
    public $DetectMode;

    /**
     * @var string 会话速率和周期特征校验开关，默认off，取值有：
<li>off：关闭；</li>
<li>on：打开。</li>
     */
    public $SessionAnalyzeSwitch;

    /**
     * @var integer 校验结果为未携带Cookie或Cookie已过期的统计周期。单位为秒，默认10，取值：5～3600。
     */
    public $InvalidStatTime;

    /**
     * @var integer 校验结果为未携带Cookie或Cookie已过期的触发阈值。单位为次，默认300，取值：1～100000000。
     */
    public $InvalidThreshold;

    /**
     * @var array Cookie校验校验结果。
     */
    public $AlgDetectResults;

    /**
     * @var array 会话速率和周期特征校验结果。
     */
    public $SessionBehaviors;

    /**
     * @param string $Name 操作名称。
     * @param string $DetectMode 校验方式，默认update_detect，取值有：
<li>detect：仅校验；</li>
<li>update_detect：更新Cookie并校验。</li>
     * @param string $SessionAnalyzeSwitch 会话速率和周期特征校验开关，默认off，取值有：
<li>off：关闭；</li>
<li>on：打开。</li>
     * @param integer $InvalidStatTime 校验结果为未携带Cookie或Cookie已过期的统计周期。单位为秒，默认10，取值：5～3600。
     * @param integer $InvalidThreshold 校验结果为未携带Cookie或Cookie已过期的触发阈值。单位为次，默认300，取值：1～100000000。
     * @param array $AlgDetectResults Cookie校验校验结果。
     * @param array $SessionBehaviors 会话速率和周期特征校验结果。
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

        if (array_key_exists("DetectMode",$param) and $param["DetectMode"] !== null) {
            $this->DetectMode = $param["DetectMode"];
        }

        if (array_key_exists("SessionAnalyzeSwitch",$param) and $param["SessionAnalyzeSwitch"] !== null) {
            $this->SessionAnalyzeSwitch = $param["SessionAnalyzeSwitch"];
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

        if (array_key_exists("SessionBehaviors",$param) and $param["SessionBehaviors"] !== null) {
            $this->SessionBehaviors = [];
            foreach ($param["SessionBehaviors"] as $key => $value){
                $obj = new AlgDetectResult();
                $obj->deserialize($value);
                array_push($this->SessionBehaviors, $obj);
            }
        }
    }
}
