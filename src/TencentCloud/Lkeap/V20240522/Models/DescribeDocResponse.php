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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDoc返回参数结构体
 *
 * @method string getDocId() 获取文档ID
 * @method void setDocId(string $DocId) 设置文档ID
 * @method string getStatus() 获取状态，

- Uploading  上传中  
- Auditing 审核中
- Parsing 解析中  
- ParseFailed 解析失败
- Indexing 创建索引中  
- IndexFailed 创建索引失败
- Success  发布成功
- Failed  失败
 * @method void setStatus(string $Status) 设置状态，

- Uploading  上传中  
- Auditing 审核中
- Parsing 解析中  
- ParseFailed 解析失败
- Indexing 创建索引中  
- IndexFailed 创建索引失败
- Success  发布成功
- Failed  失败
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method array getAttributeLabels() 获取属性标签
 * @method void setAttributeLabels(array $AttributeLabels) 设置属性标签
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDocResponse extends AbstractModel
{
    /**
     * @var string 文档ID
     */
    public $DocId;

    /**
     * @var string 状态，

- Uploading  上传中  
- Auditing 审核中
- Parsing 解析中  
- ParseFailed 解析失败
- Indexing 创建索引中  
- IndexFailed 创建索引失败
- Success  发布成功
- Failed  失败
     */
    public $Status;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var array 属性标签
     */
    public $AttributeLabels;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DocId 文档ID
     * @param string $Status 状态，

- Uploading  上传中  
- Auditing 审核中
- Parsing 解析中  
- ParseFailed 解析失败
- Indexing 创建索引中  
- IndexFailed 创建索引失败
- Success  发布成功
- Failed  失败
     * @param string $FileName 文件名
     * @param string $UpdateTime 更新时间
     * @param array $AttributeLabels 属性标签
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
