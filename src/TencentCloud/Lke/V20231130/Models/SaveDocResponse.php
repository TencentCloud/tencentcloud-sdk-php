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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SaveDoc返回参数结构体
 *
 * @method string getDocBizId() 获取<p>文档ID</p>
 * @method void setDocBizId(string $DocBizId) 设置<p>文档ID</p>
 * @method string getErrorMsg() 获取<p>导入错误信息</p>
 * @method void setErrorMsg(string $ErrorMsg) 设置<p>导入错误信息</p>
 * @method string getErrorLink() 获取<p>错误链接</p>
 * @method void setErrorLink(string $ErrorLink) 设置<p>错误链接</p>
 * @method string getErrorLinkText() 获取<p>错误链接文本</p>
 * @method void setErrorLinkText(string $ErrorLinkText) 设置<p>错误链接文本</p>
 * @method integer getDuplicateFileCheckType() 获取<p>重复类型，0：未重复，其他取值请参考入参DuplicateFileHandle结构体的CheckType字段</p>
 * @method void setDuplicateFileCheckType(integer $DuplicateFileCheckType) 设置<p>重复类型，0：未重复，其他取值请参考入参DuplicateFileHandle结构体的CheckType字段</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SaveDocResponse extends AbstractModel
{
    /**
     * @var string <p>文档ID</p>
     */
    public $DocBizId;

    /**
     * @var string <p>导入错误信息</p>
     */
    public $ErrorMsg;

    /**
     * @var string <p>错误链接</p>
     */
    public $ErrorLink;

    /**
     * @var string <p>错误链接文本</p>
     */
    public $ErrorLinkText;

    /**
     * @var integer <p>重复类型，0：未重复，其他取值请参考入参DuplicateFileHandle结构体的CheckType字段</p>
     */
    public $DuplicateFileCheckType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DocBizId <p>文档ID</p>
     * @param string $ErrorMsg <p>导入错误信息</p>
     * @param string $ErrorLink <p>错误链接</p>
     * @param string $ErrorLinkText <p>错误链接文本</p>
     * @param integer $DuplicateFileCheckType <p>重复类型，0：未重复，其他取值请参考入参DuplicateFileHandle结构体的CheckType字段</p>
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
        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("ErrorLink",$param) and $param["ErrorLink"] !== null) {
            $this->ErrorLink = $param["ErrorLink"];
        }

        if (array_key_exists("ErrorLinkText",$param) and $param["ErrorLinkText"] !== null) {
            $this->ErrorLinkText = $param["ErrorLinkText"];
        }

        if (array_key_exists("DuplicateFileCheckType",$param) and $param["DuplicateFileCheckType"] !== null) {
            $this->DuplicateFileCheckType = $param["DuplicateFileCheckType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
