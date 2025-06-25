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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDocPreview返回参数结构体
 *
 * @method string getFileName() 获取文件名, 发布端固定使用这个名称
 * @method void setFileName(string $FileName) 设置文件名, 发布端固定使用这个名称
 * @method string getFileType() 获取文件类型
 * @method void setFileType(string $FileType) 设置文件类型
 * @method string getCosUrl() 获取cos路径

 * @method void setCosUrl(string $CosUrl) 设置cos路径

 * @method string getUrl() 获取cos临时地址

 * @method void setUrl(string $Url) 设置cos临时地址

 * @method string getBucket() 获取cos桶

 * @method void setBucket(string $Bucket) 设置cos桶

 * @method string getNewName() 获取存在文档重命名情况下的新名称, 评测端优先使用这个名称
 * @method void setNewName(string $NewName) 设置存在文档重命名情况下的新名称, 评测端优先使用这个名称
 * @method string getParseResultCosUrl() 获取文件md结果cos临时地址
 * @method void setParseResultCosUrl(string $ParseResultCosUrl) 设置文件md结果cos临时地址
 * @method boolean getIsDownload() 获取是否可下载
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDownload(boolean $IsDownload) 设置是否可下载
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetDocPreviewResponse extends AbstractModel
{
    /**
     * @var string 文件名, 发布端固定使用这个名称
     */
    public $FileName;

    /**
     * @var string 文件类型
     */
    public $FileType;

    /**
     * @var string cos路径

     */
    public $CosUrl;

    /**
     * @var string cos临时地址

     */
    public $Url;

    /**
     * @var string cos桶

     */
    public $Bucket;

    /**
     * @var string 存在文档重命名情况下的新名称, 评测端优先使用这个名称
     */
    public $NewName;

    /**
     * @var string 文件md结果cos临时地址
     */
    public $ParseResultCosUrl;

    /**
     * @var boolean 是否可下载
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDownload;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FileName 文件名, 发布端固定使用这个名称
     * @param string $FileType 文件类型
     * @param string $CosUrl cos路径

     * @param string $Url cos临时地址

     * @param string $Bucket cos桶

     * @param string $NewName 存在文档重命名情况下的新名称, 评测端优先使用这个名称
     * @param string $ParseResultCosUrl 文件md结果cos临时地址
     * @param boolean $IsDownload 是否可下载
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }

        if (array_key_exists("ParseResultCosUrl",$param) and $param["ParseResultCosUrl"] !== null) {
            $this->ParseResultCosUrl = $param["ParseResultCosUrl"];
        }

        if (array_key_exists("IsDownload",$param) and $param["IsDownload"] !== null) {
            $this->IsDownload = $param["IsDownload"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
