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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RequestLocalTask返回参数结构体
 *
 * @method string getSid() 获取返回的任务id
 * @method void setSid(string $Sid) 设置返回的任务id
 * @method string getSrcFileMd5() 获取任务文件的mk5
 * @method void setSrcFileMd5(string $SrcFileMd5) 设置任务文件的mk5
 * @method integer getSrcFileSize() 获取文件大小，可不传
 * @method void setSrcFileSize(integer $SrcFileSize) 设置文件大小，可不传
 * @method string getSrcFileUrl() 获取任务文件的下载地址，必须无鉴权可下载
 * @method void setSrcFileUrl(string $SrcFileUrl) 设置任务文件的下载地址，必须无鉴权可下载
 * @method string getSrcFileType() 获取release: 需要INFO-PLIST文件，会生成工具部署安装包，并带有license文件，绑定机器；nobind不需要INFO-PLIST文件，不绑定机器
 * @method void setSrcFileType(string $SrcFileType) 设置release: 需要INFO-PLIST文件，会生成工具部署安装包，并带有license文件，绑定机器；nobind不需要INFO-PLIST文件，不绑定机器
 * @method string getSrcFileVersion() 获取enterprise
trial
 * @method void setSrcFileVersion(string $SrcFileVersion) 设置enterprise
trial
 * @method string getEncryptParam() 获取补充字段
 * @method void setEncryptParam(string $EncryptParam) 设置补充字段
 * @method integer getEncryptState() 获取任务状态
 * @method void setEncryptState(integer $EncryptState) 设置任务状态
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RequestLocalTaskResponse extends AbstractModel
{
    /**
     * @var string 返回的任务id
     */
    public $Sid;

    /**
     * @var string 任务文件的mk5
     */
    public $SrcFileMd5;

    /**
     * @var integer 文件大小，可不传
     */
    public $SrcFileSize;

    /**
     * @var string 任务文件的下载地址，必须无鉴权可下载
     */
    public $SrcFileUrl;

    /**
     * @var string release: 需要INFO-PLIST文件，会生成工具部署安装包，并带有license文件，绑定机器；nobind不需要INFO-PLIST文件，不绑定机器
     */
    public $SrcFileType;

    /**
     * @var string enterprise
trial
     */
    public $SrcFileVersion;

    /**
     * @var string 补充字段
     */
    public $EncryptParam;

    /**
     * @var integer 任务状态
     */
    public $EncryptState;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Sid 返回的任务id
     * @param string $SrcFileMd5 任务文件的mk5
     * @param integer $SrcFileSize 文件大小，可不传
     * @param string $SrcFileUrl 任务文件的下载地址，必须无鉴权可下载
     * @param string $SrcFileType release: 需要INFO-PLIST文件，会生成工具部署安装包，并带有license文件，绑定机器；nobind不需要INFO-PLIST文件，不绑定机器
     * @param string $SrcFileVersion enterprise
trial
     * @param string $EncryptParam 补充字段
     * @param integer $EncryptState 任务状态
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
        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("SrcFileMd5",$param) and $param["SrcFileMd5"] !== null) {
            $this->SrcFileMd5 = $param["SrcFileMd5"];
        }

        if (array_key_exists("SrcFileSize",$param) and $param["SrcFileSize"] !== null) {
            $this->SrcFileSize = $param["SrcFileSize"];
        }

        if (array_key_exists("SrcFileUrl",$param) and $param["SrcFileUrl"] !== null) {
            $this->SrcFileUrl = $param["SrcFileUrl"];
        }

        if (array_key_exists("SrcFileType",$param) and $param["SrcFileType"] !== null) {
            $this->SrcFileType = $param["SrcFileType"];
        }

        if (array_key_exists("SrcFileVersion",$param) and $param["SrcFileVersion"] !== null) {
            $this->SrcFileVersion = $param["SrcFileVersion"];
        }

        if (array_key_exists("EncryptParam",$param) and $param["EncryptParam"] !== null) {
            $this->EncryptParam = $param["EncryptParam"];
        }

        if (array_key_exists("EncryptState",$param) and $param["EncryptState"] !== null) {
            $this->EncryptState = $param["EncryptState"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
