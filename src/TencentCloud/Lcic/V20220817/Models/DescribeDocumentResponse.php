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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDocument返回参数结构体
 *
 * @method string getDocumentId() 获取文档Id
 * @method void setDocumentId(string $DocumentId) 设置文档Id
 * @method string getDocumentUrl() 获取文档原址url
 * @method void setDocumentUrl(string $DocumentUrl) 设置文档原址url
 * @method string getDocumentName() 获取文档名称
 * @method void setDocumentName(string $DocumentName) 设置文档名称
 * @method string getOwner() 获取文档所有者UserId
 * @method void setOwner(string $Owner) 设置文档所有者UserId
 * @method integer getSdkAppId() 获取应用Id
 * @method void setSdkAppId(integer $SdkAppId) 设置应用Id
 * @method integer getPermission() 获取文档权限
 * @method void setPermission(integer $Permission) 设置文档权限
 * @method string getTranscodeResult() 获取转码结果，无需转码为空，转码成功为结果url，转码失败为错误码
 * @method void setTranscodeResult(string $TranscodeResult) 设置转码结果，无需转码为空，转码成功为结果url，转码失败为错误码
 * @method integer getTranscodeType() 获取转码类型
 * @method void setTranscodeType(integer $TranscodeType) 设置转码类型
 * @method integer getTranscodeProgress() 获取转码进度， 0 - 100 表示（0% - 100%）
 * @method void setTranscodeProgress(integer $TranscodeProgress) 设置转码进度， 0 - 100 表示（0% - 100%）
 * @method integer getTranscodeState() 获取转码状态，0为无需转码，1为正在转码，2为转码失败，3为转码成功
 * @method void setTranscodeState(integer $TranscodeState) 设置转码状态，0为无需转码，1为正在转码，2为转码失败，3为转码成功
 * @method string getTranscodeInfo() 获取转码失败后的错误信息
 * @method void setTranscodeInfo(string $TranscodeInfo) 设置转码失败后的错误信息
 * @method string getDocumentType() 获取文档类型
 * @method void setDocumentType(string $DocumentType) 设置文档类型
 * @method integer getDocumentSize() 获取文档大小，单位：字节
 * @method void setDocumentSize(integer $DocumentSize) 设置文档大小，单位：字节
 * @method integer getUpdateTime() 获取更新的UNIX时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新的UNIX时间戳
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDocumentResponse extends AbstractModel
{
    /**
     * @var string 文档Id
     */
    public $DocumentId;

    /**
     * @var string 文档原址url
     */
    public $DocumentUrl;

    /**
     * @var string 文档名称
     */
    public $DocumentName;

    /**
     * @var string 文档所有者UserId
     */
    public $Owner;

    /**
     * @var integer 应用Id
     */
    public $SdkAppId;

    /**
     * @var integer 文档权限
     */
    public $Permission;

    /**
     * @var string 转码结果，无需转码为空，转码成功为结果url，转码失败为错误码
     */
    public $TranscodeResult;

    /**
     * @var integer 转码类型
     */
    public $TranscodeType;

    /**
     * @var integer 转码进度， 0 - 100 表示（0% - 100%）
     */
    public $TranscodeProgress;

    /**
     * @var integer 转码状态，0为无需转码，1为正在转码，2为转码失败，3为转码成功
     */
    public $TranscodeState;

    /**
     * @var string 转码失败后的错误信息
     */
    public $TranscodeInfo;

    /**
     * @var string 文档类型
     */
    public $DocumentType;

    /**
     * @var integer 文档大小，单位：字节
     */
    public $DocumentSize;

    /**
     * @var integer 更新的UNIX时间戳
     */
    public $UpdateTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DocumentId 文档Id
     * @param string $DocumentUrl 文档原址url
     * @param string $DocumentName 文档名称
     * @param string $Owner 文档所有者UserId
     * @param integer $SdkAppId 应用Id
     * @param integer $Permission 文档权限
     * @param string $TranscodeResult 转码结果，无需转码为空，转码成功为结果url，转码失败为错误码
     * @param integer $TranscodeType 转码类型
     * @param integer $TranscodeProgress 转码进度， 0 - 100 表示（0% - 100%）
     * @param integer $TranscodeState 转码状态，0为无需转码，1为正在转码，2为转码失败，3为转码成功
     * @param string $TranscodeInfo 转码失败后的错误信息
     * @param string $DocumentType 文档类型
     * @param integer $DocumentSize 文档大小，单位：字节
     * @param integer $UpdateTime 更新的UNIX时间戳
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
        if (array_key_exists("DocumentId",$param) and $param["DocumentId"] !== null) {
            $this->DocumentId = $param["DocumentId"];
        }

        if (array_key_exists("DocumentUrl",$param) and $param["DocumentUrl"] !== null) {
            $this->DocumentUrl = $param["DocumentUrl"];
        }

        if (array_key_exists("DocumentName",$param) and $param["DocumentName"] !== null) {
            $this->DocumentName = $param["DocumentName"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("TranscodeResult",$param) and $param["TranscodeResult"] !== null) {
            $this->TranscodeResult = $param["TranscodeResult"];
        }

        if (array_key_exists("TranscodeType",$param) and $param["TranscodeType"] !== null) {
            $this->TranscodeType = $param["TranscodeType"];
        }

        if (array_key_exists("TranscodeProgress",$param) and $param["TranscodeProgress"] !== null) {
            $this->TranscodeProgress = $param["TranscodeProgress"];
        }

        if (array_key_exists("TranscodeState",$param) and $param["TranscodeState"] !== null) {
            $this->TranscodeState = $param["TranscodeState"];
        }

        if (array_key_exists("TranscodeInfo",$param) and $param["TranscodeInfo"] !== null) {
            $this->TranscodeInfo = $param["TranscodeInfo"];
        }

        if (array_key_exists("DocumentType",$param) and $param["DocumentType"] !== null) {
            $this->DocumentType = $param["DocumentType"];
        }

        if (array_key_exists("DocumentSize",$param) and $param["DocumentSize"] !== null) {
            $this->DocumentSize = $param["DocumentSize"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
