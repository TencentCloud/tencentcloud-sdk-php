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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 腾讯云可观测平台通知渠道组信息
 *
 * @method string getNoticeId() 获取<p>腾讯云可观测平台通知模板 ID</p>
 * @method void setNoticeId(string $NoticeId) 设置<p>腾讯云可观测平台通知模板 ID</p>
 * @method string getContentTmplId() 获取<p>腾讯云可观测平台内容模板ID，为空时使用默认内容模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentTmplId(string $ContentTmplId) 设置<p>腾讯云可观测平台内容模板ID，为空时使用默认内容模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlarmLevels() 获取<p>告警级别,0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)</p>
 * @method void setAlarmLevels(array $AlarmLevels) 设置<p>告警级别,0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)</p>
 */
class MonitorNoticeRule extends AbstractModel
{
    /**
     * @var string <p>腾讯云可观测平台通知模板 ID</p>
     */
    public $NoticeId;

    /**
     * @var string <p>腾讯云可观测平台内容模板ID，为空时使用默认内容模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentTmplId;

    /**
     * @var array <p>告警级别,0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)</p>
     */
    public $AlarmLevels;

    /**
     * @param string $NoticeId <p>腾讯云可观测平台通知模板 ID</p>
     * @param string $ContentTmplId <p>腾讯云可观测平台内容模板ID，为空时使用默认内容模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlarmLevels <p>告警级别,0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)</p>
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
        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("ContentTmplId",$param) and $param["ContentTmplId"] !== null) {
            $this->ContentTmplId = $param["ContentTmplId"];
        }

        if (array_key_exists("AlarmLevels",$param) and $param["AlarmLevels"] !== null) {
            $this->AlarmLevels = $param["AlarmLevels"];
        }
    }
}
