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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVerifyRecord返回参数结构体
 *
 * @method string getSubDomain() 获取子解析
 * @method void setSubDomain(string $SubDomain) 设置子解析
 * @method string getRecord() 获取解析值
 * @method void setRecord(string $Record) 设置解析值
 * @method string getRecordType() 获取解析类型
 * @method void setRecordType(string $RecordType) 设置解析类型
 * @method string getFileVerifyUrl() 获取文件验证 URL 指引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileVerifyUrl(string $FileVerifyUrl) 设置文件验证 URL 指引
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileVerifyDomains() 获取文件校验域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileVerifyDomains(array $FileVerifyDomains) 设置文件校验域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileVerifyName() 获取文件校验文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileVerifyName(string $FileVerifyName) 设置文件校验文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateVerifyRecordResponse extends AbstractModel
{
    /**
     * @var string 子解析
     */
    public $SubDomain;

    /**
     * @var string 解析值
     */
    public $Record;

    /**
     * @var string 解析类型
     */
    public $RecordType;

    /**
     * @var string 文件验证 URL 指引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileVerifyUrl;

    /**
     * @var array 文件校验域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileVerifyDomains;

    /**
     * @var string 文件校验文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileVerifyName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SubDomain 子解析
     * @param string $Record 解析值
     * @param string $RecordType 解析类型
     * @param string $FileVerifyUrl 文件验证 URL 指引
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileVerifyDomains 文件校验域名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileVerifyName 文件校验文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("FileVerifyUrl",$param) and $param["FileVerifyUrl"] !== null) {
            $this->FileVerifyUrl = $param["FileVerifyUrl"];
        }

        if (array_key_exists("FileVerifyDomains",$param) and $param["FileVerifyDomains"] !== null) {
            $this->FileVerifyDomains = $param["FileVerifyDomains"];
        }

        if (array_key_exists("FileVerifyName",$param) and $param["FileVerifyName"] !== null) {
            $this->FileVerifyName = $param["FileVerifyName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
