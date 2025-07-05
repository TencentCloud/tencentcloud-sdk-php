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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 热词库查询返回结果集
 *
 * @method string getHotwordsId() 获取热词库 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHotwordsId(string $HotwordsId) 设置热词库 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取当前热词库状态，数值表示绑定该热词库的智能字幕模板数量。
Status 为 0 ，表示该热词库没有被智能字幕模板引用可以删除；
Status 不为 0，表示该热词库不能被删除。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置当前热词库状态，数值表示绑定该热词库的智能字幕模板数量。
Status 为 0 ，表示该热词库没有被智能字幕模板引用可以删除；
Status 不为 0，表示该热词库不能被删除。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取热词库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置热词库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWordCount() 获取热词库中的热词数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWordCount(integer $WordCount) 设置热词库中的热词数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取热词文件上传时的文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置热词文件上传时的文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取热词库创建时间 ISOUTC 时间格式  2006-01-02T15:04:05Z
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置热词库创建时间 ISOUTC 时间格式  2006-01-02T15:04:05Z
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取热词库创建时间 ISOUTC 时间格式  2006-01-02T15:04:05Z
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置热词库创建时间 ISOUTC 时间格式  2006-01-02T15:04:05Z
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取0：临时热词库
1：文件热词库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置0：临时热词库
1：文件热词库
注意：此字段可能返回 null，表示取不到有效值。
 */
class AsrHotwordsSet extends AbstractModel
{
    /**
     * @var string 热词库 Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HotwordsId;

    /**
     * @var integer 当前热词库状态，数值表示绑定该热词库的智能字幕模板数量。
Status 为 0 ，表示该热词库没有被智能字幕模板引用可以删除；
Status 不为 0，表示该热词库不能被删除。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 热词库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 热词库中的热词数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WordCount;

    /**
     * @var string 热词文件上传时的文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 热词库创建时间 ISOUTC 时间格式  2006-01-02T15:04:05Z
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 热词库创建时间 ISOUTC 时间格式  2006-01-02T15:04:05Z
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 0：临时热词库
1：文件热词库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $HotwordsId 热词库 Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 当前热词库状态，数值表示绑定该热词库的智能字幕模板数量。
Status 为 0 ，表示该热词库没有被智能字幕模板引用可以删除；
Status 不为 0，表示该热词库不能被删除。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 热词库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WordCount 热词库中的热词数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 热词文件上传时的文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 热词库创建时间 ISOUTC 时间格式  2006-01-02T15:04:05Z
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 热词库创建时间 ISOUTC 时间格式  2006-01-02T15:04:05Z
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 0：临时热词库
1：文件热词库
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("HotwordsId",$param) and $param["HotwordsId"] !== null) {
            $this->HotwordsId = $param["HotwordsId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("WordCount",$param) and $param["WordCount"] !== null) {
            $this->WordCount = $param["WordCount"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
