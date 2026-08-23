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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNotifySettingAk请求参数结构体
 *
 * @method array getAlert() 获取<p>告警类型/等级 (类型: AbnBehavior-异常行为, LeakDetect-泄露监测; 等级: 1-提示, 2-低危, 3-中危, 4-高危, 5-严重)</p>
 * @method void setAlert(array $Alert) 设置<p>告警类型/等级 (类型: AbnBehavior-异常行为, LeakDetect-泄露监测; 等级: 1-提示, 2-低危, 3-中危, 4-高危, 5-严重)</p>
 * @method integer getAlertGranularity() 获取<p>告警通知粒度</p><p>枚举值：</p><ul><li>0： 按告警聚合推送</li><li>1： 按调用记录推送</li></ul>
 * @method void setAlertGranularity(integer $AlertGranularity) 设置<p>告警通知粒度</p><p>枚举值：</p><ul><li>0： 按告警聚合推送</li><li>1： 按调用记录推送</li></ul>
 * @method array getAsset() 获取<p>资产事件</p><p>枚举值：</p><ul><li>NewAk： AK新增</li></ul>
 * @method void setAsset(array $Asset) 设置<p>资产事件</p><p>枚举值：</p><ul><li>NewAk： AK新增</li></ul>
 * @method string getBeginTime() 获取<p>通知开始时间</p><p>参数格式：hh:mm:ss</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>通知开始时间</p><p>参数格式：hh:mm:ss</p>
 * @method string getEndTime() 获取<p>通知结束时间</p><p>参数格式：hh:mm:ss</p>
 * @method void setEndTime(string $EndTime) 设置<p>通知结束时间</p><p>参数格式：hh:mm:ss</p>
 */
class ModifyNotifySettingAkRequest extends AbstractModel
{
    /**
     * @var array <p>告警类型/等级 (类型: AbnBehavior-异常行为, LeakDetect-泄露监测; 等级: 1-提示, 2-低危, 3-中危, 4-高危, 5-严重)</p>
     */
    public $Alert;

    /**
     * @var integer <p>告警通知粒度</p><p>枚举值：</p><ul><li>0： 按告警聚合推送</li><li>1： 按调用记录推送</li></ul>
     */
    public $AlertGranularity;

    /**
     * @var array <p>资产事件</p><p>枚举值：</p><ul><li>NewAk： AK新增</li></ul>
     */
    public $Asset;

    /**
     * @var string <p>通知开始时间</p><p>参数格式：hh:mm:ss</p>
     */
    public $BeginTime;

    /**
     * @var string <p>通知结束时间</p><p>参数格式：hh:mm:ss</p>
     */
    public $EndTime;

    /**
     * @param array $Alert <p>告警类型/等级 (类型: AbnBehavior-异常行为, LeakDetect-泄露监测; 等级: 1-提示, 2-低危, 3-中危, 4-高危, 5-严重)</p>
     * @param integer $AlertGranularity <p>告警通知粒度</p><p>枚举值：</p><ul><li>0： 按告警聚合推送</li><li>1： 按调用记录推送</li></ul>
     * @param array $Asset <p>资产事件</p><p>枚举值：</p><ul><li>NewAk： AK新增</li></ul>
     * @param string $BeginTime <p>通知开始时间</p><p>参数格式：hh:mm:ss</p>
     * @param string $EndTime <p>通知结束时间</p><p>参数格式：hh:mm:ss</p>
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
        if (array_key_exists("Alert",$param) and $param["Alert"] !== null) {
            $this->Alert = [];
            foreach ($param["Alert"] as $key => $value){
                $obj = new LevelOption();
                $obj->deserialize($value);
                array_push($this->Alert, $obj);
            }
        }

        if (array_key_exists("AlertGranularity",$param) and $param["AlertGranularity"] !== null) {
            $this->AlertGranularity = $param["AlertGranularity"];
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
