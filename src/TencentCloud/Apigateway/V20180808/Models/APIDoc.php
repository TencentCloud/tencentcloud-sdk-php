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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API文档基本信息
 *
 * @method string getApiDocId() 获取API文档ID
 * @method void setApiDocId(string $ApiDocId) 设置API文档ID
 * @method string getApiDocName() 获取API文档名称
 * @method void setApiDocName(string $ApiDocName) 设置API文档名称
 * @method string getApiDocStatus() 获取API文档构建状态
 * @method void setApiDocStatus(string $ApiDocStatus) 设置API文档构建状态
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class APIDoc extends AbstractModel
{
    /**
     * @var string API文档ID
     */
    public $ApiDocId;

    /**
     * @var string API文档名称
     */
    public $ApiDocName;

    /**
     * @var string API文档构建状态
     */
    public $ApiDocStatus;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $ApiDocId API文档ID
     * @param string $ApiDocName API文档名称
     * @param string $ApiDocStatus API文档构建状态
     * @param array $Tags 标签
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
        if (array_key_exists("ApiDocId",$param) and $param["ApiDocId"] !== null) {
            $this->ApiDocId = $param["ApiDocId"];
        }

        if (array_key_exists("ApiDocName",$param) and $param["ApiDocName"] !== null) {
            $this->ApiDocName = $param["ApiDocName"];
        }

        if (array_key_exists("ApiDocStatus",$param) and $param["ApiDocStatus"] !== null) {
            $this->ApiDocStatus = $param["ApiDocStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
