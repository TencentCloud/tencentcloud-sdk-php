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
 * 自定义通知内容模板
 *
 * @method string getTmplID() 获取<p>自定义通知内容模板id，唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmplID(string $TmplID) 设置<p>自定义通知内容模板id，唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTmplName() 获取<p>自定义通知内容模板名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmplName(string $TmplName) 设置<p>自定义通知内容模板名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method NoticeContentTmplItem getTmplContents() 获取<p>通知内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmplContents(NoticeContentTmplItem $TmplContents) 设置<p>通知内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>Unix时间戳，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>Unix时间戳，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>Unix时间戳，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>Unix时间戳，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifier() 获取<p>最后修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifier(string $LastModifier) 设置<p>最后修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMonitorType() 获取<p>监控类型</p>
 * @method void setMonitorType(string $MonitorType) 设置<p>监控类型</p>
 * @method string getTmplLanguage() 获取<p>模板语言 en/zh</p>
 * @method void setTmplLanguage(string $TmplLanguage) 设置<p>模板语言 en/zh</p>
 */
class NoticeContentTmpl extends AbstractModel
{
    /**
     * @var string <p>自定义通知内容模板id，唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmplID;

    /**
     * @var string <p>自定义通知内容模板名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmplName;

    /**
     * @var NoticeContentTmplItem <p>通知内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmplContents;

    /**
     * @var integer <p>Unix时间戳，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>Unix时间戳，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>最后修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifier;

    /**
     * @var string <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string <p>监控类型</p>
     */
    public $MonitorType;

    /**
     * @var string <p>模板语言 en/zh</p>
     */
    public $TmplLanguage;

    /**
     * @param string $TmplID <p>自定义通知内容模板id，唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TmplName <p>自定义通知内容模板名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param NoticeContentTmplItem $TmplContents <p>通知内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>Unix时间戳，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>Unix时间戳，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifier <p>最后修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MonitorType <p>监控类型</p>
     * @param string $TmplLanguage <p>模板语言 en/zh</p>
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
        if (array_key_exists("TmplID",$param) and $param["TmplID"] !== null) {
            $this->TmplID = $param["TmplID"];
        }

        if (array_key_exists("TmplName",$param) and $param["TmplName"] !== null) {
            $this->TmplName = $param["TmplName"];
        }

        if (array_key_exists("TmplContents",$param) and $param["TmplContents"] !== null) {
            $this->TmplContents = new NoticeContentTmplItem();
            $this->TmplContents->deserialize($param["TmplContents"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastModifier",$param) and $param["LastModifier"] !== null) {
            $this->LastModifier = $param["LastModifier"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("TmplLanguage",$param) and $param["TmplLanguage"] !== null) {
            $this->TmplLanguage = $param["TmplLanguage"];
        }
    }
}
