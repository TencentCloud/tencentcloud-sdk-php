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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 官网通知内容模板元素
 *
 * @method string getAlarmContentTmpl() 获取告警内容模板
 * @method void setAlarmContentTmpl(string $AlarmContentTmpl) 设置告警内容模板
 * @method string getAlarmObjectTmpl() 获取告警对象模板
 * @method void setAlarmObjectTmpl(string $AlarmObjectTmpl) 设置告警对象模板
 * @method string getAlarmRegionTmpl() 获取告警地域模板
 * @method void setAlarmRegionTmpl(string $AlarmRegionTmpl) 设置告警地域模板
 * @method string getAlarmTimeTmpl() 获取告警时间模板
 * @method void setAlarmTimeTmpl(string $AlarmTimeTmpl) 设置告警时间模板
 */
class QCloudYeheWeChatNoticeTmplItem extends AbstractModel
{
    /**
     * @var string 告警内容模板
     */
    public $AlarmContentTmpl;

    /**
     * @var string 告警对象模板
     */
    public $AlarmObjectTmpl;

    /**
     * @var string 告警地域模板
     */
    public $AlarmRegionTmpl;

    /**
     * @var string 告警时间模板
     */
    public $AlarmTimeTmpl;

    /**
     * @param string $AlarmContentTmpl 告警内容模板
     * @param string $AlarmObjectTmpl 告警对象模板
     * @param string $AlarmRegionTmpl 告警地域模板
     * @param string $AlarmTimeTmpl 告警时间模板
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
        if (array_key_exists("AlarmContentTmpl",$param) and $param["AlarmContentTmpl"] !== null) {
            $this->AlarmContentTmpl = $param["AlarmContentTmpl"];
        }

        if (array_key_exists("AlarmObjectTmpl",$param) and $param["AlarmObjectTmpl"] !== null) {
            $this->AlarmObjectTmpl = $param["AlarmObjectTmpl"];
        }

        if (array_key_exists("AlarmRegionTmpl",$param) and $param["AlarmRegionTmpl"] !== null) {
            $this->AlarmRegionTmpl = $param["AlarmRegionTmpl"];
        }

        if (array_key_exists("AlarmTimeTmpl",$param) and $param["AlarmTimeTmpl"] !== null) {
            $this->AlarmTimeTmpl = $param["AlarmTimeTmpl"];
        }
    }
}
