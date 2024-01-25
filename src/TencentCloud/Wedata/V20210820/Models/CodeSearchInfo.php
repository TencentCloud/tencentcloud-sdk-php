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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代码搜索信息
 *
 * @method string getId() 获取文件或任务ID
 * @method void setId(string $Id) 设置文件或任务ID
 * @method string getName() 获取文件或任务名称
 * @method void setName(string $Name) 设置文件或任务名称
 * @method string getType() 获取文件或任务类型
 * @method void setType(string $Type) 设置文件或任务类型
 * @method array getContent() 获取命中内容，包括行号和文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(array $Content) 设置命中内容，包括行号和文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerName() 获取责任人名称
 * @method void setOwnerName(string $OwnerName) 设置责任人名称
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getMatchRows() 获取命中行数
 * @method void setMatchRows(integer $MatchRows) 设置命中行数
 * @method string getSubmitTime() 获取提交调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitTime(string $SubmitTime) 设置提交调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayType() 获取展示类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayType(string $DisplayType) 设置展示类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosPath() 获取Cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosPath(string $CosPath) 设置Cos路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodeSearchInfo extends AbstractModel
{
    /**
     * @var string 文件或任务ID
     */
    public $Id;

    /**
     * @var string 文件或任务名称
     */
    public $Name;

    /**
     * @var string 文件或任务类型
     */
    public $Type;

    /**
     * @var array 命中内容，包括行号和文本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 责任人名称
     */
    public $OwnerName;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 命中行数
     */
    public $MatchRows;

    /**
     * @var string 提交调度时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitTime;

    /**
     * @var string 展示类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayType;

    /**
     * @var string Cos路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosPath;

    /**
     * @param string $Id 文件或任务ID
     * @param string $Name 文件或任务名称
     * @param string $Type 文件或任务类型
     * @param array $Content 命中内容，包括行号和文本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerName 责任人名称
     * @param string $UpdateTime 更新时间
     * @param string $CreateTime 创建时间
     * @param integer $MatchRows 命中行数
     * @param string $SubmitTime 提交调度时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayType 展示类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosPath Cos路径
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new CodeMatchInfo();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MatchRows",$param) and $param["MatchRows"] !== null) {
            $this->MatchRows = $param["MatchRows"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("DisplayType",$param) and $param["DisplayType"] !== null) {
            $this->DisplayType = $param["DisplayType"];
        }

        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }
    }
}
