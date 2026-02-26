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
 * @method string getTmplID() 获取自定义通知内容模板id，唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmplID(string $TmplID) 设置自定义通知内容模板id，唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTmplName() 获取自定义通知内容模板名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmplName(string $TmplName) 设置自定义通知内容模板名
注意：此字段可能返回 null，表示取不到有效值。
 * @method NoticeContentTmplItem getTmplContents() 获取通知内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmplContents(NoticeContentTmplItem $TmplContents) 设置通知内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取Unix时间戳，秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置Unix时间戳，秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取Unix时间戳，秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置Unix时间戳，秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifier() 获取最后修改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifier(string $LastModifier) 设置最后修改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMonitorType() 获取监控类型
 * @method void setMonitorType(string $MonitorType) 设置监控类型
 * @method string getTmplLanguage() 获取模板语言 en/zh
 * @method void setTmplLanguage(string $TmplLanguage) 设置模板语言 en/zh
 */
class NoticeContentTmpl extends AbstractModel
{
    /**
     * @var string 自定义通知内容模板id，唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmplID;

    /**
     * @var string 自定义通知内容模板名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmplName;

    /**
     * @var NoticeContentTmplItem 通知内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmplContents;

    /**
     * @var integer Unix时间戳，秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer Unix时间戳，秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 最后修改人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifier;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string 监控类型
     */
    public $MonitorType;

    /**
     * @var string 模板语言 en/zh
     */
    public $TmplLanguage;

    /**
     * @param string $TmplID 自定义通知内容模板id，唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TmplName 自定义通知内容模板名
注意：此字段可能返回 null，表示取不到有效值。
     * @param NoticeContentTmplItem $TmplContents 通知内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime Unix时间戳，秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime Unix时间戳，秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifier 最后修改人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MonitorType 监控类型
     * @param string $TmplLanguage 模板语言 en/zh
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
