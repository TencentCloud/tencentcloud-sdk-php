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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 离线文档列表回包
 *
 * @method string getDocId() 获取文档id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocId(string $DocId) 设置文档id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取 状态，
- Uploading  上传中  
- Parsing 解析中  
- ParseFailed 解析失败
- Indexing 创建索引中  
- IndexFailed 创建索引失败
- Success  发布成功
- Failed  失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置 状态，
- Uploading  上传中  
- Parsing 解析中  
- ParseFailed 解析失败
- Indexing 创建索引中  
- IndexFailed 创建索引失败
- Success  发布成功
- Failed  失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAttributeLabels() 获取属性标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttributeLabels(array $AttributeLabels) 设置属性标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class DocItem extends AbstractModel
{
    /**
     * @var string 文档id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocId;

    /**
     * @var string  状态，
- Uploading  上传中  
- Parsing 解析中  
- ParseFailed 解析失败
- Indexing 创建索引中  
- IndexFailed 创建索引失败
- Success  发布成功
- Failed  失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 属性标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttributeLabels;

    /**
     * @param string $DocId 文档id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status  状态，
- Uploading  上传中  
- Parsing 解析中  
- ParseFailed 解析失败
- Indexing 创建索引中  
- IndexFailed 创建索引失败
- Success  发布成功
- Failed  失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AttributeLabels 属性标签
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
        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AttributeLabels",$param) and $param["AttributeLabels"] !== null) {
            $this->AttributeLabels = [];
            foreach ($param["AttributeLabels"] as $key => $value){
                $obj = new AttributeLabelReferItem();
                $obj->deserialize($value);
                array_push($this->AttributeLabels, $obj);
            }
        }
    }
}
