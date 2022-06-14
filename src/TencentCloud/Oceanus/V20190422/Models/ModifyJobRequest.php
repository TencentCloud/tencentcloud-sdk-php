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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyJob请求参数结构体
 *
 * @method string getJobId() 获取作业Id
 * @method void setJobId(string $JobId) 设置作业Id
 * @method string getName() 获取作业名称，支持长度小于50的中文/英文/数字/”-”/”_”/”.”，不能重名
 * @method void setName(string $Name) 设置作业名称，支持长度小于50的中文/英文/数字/”-”/”_”/”.”，不能重名
 * @method string getRemark() 获取描述
 * @method void setRemark(string $Remark) 设置描述
 * @method string getTargetFolderId() 获取拖拽文件需传入此参数
 * @method void setTargetFolderId(string $TargetFolderId) 设置拖拽文件需传入此参数
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class ModifyJobRequest extends AbstractModel
{
    /**
     * @var string 作业Id
     */
    public $JobId;

    /**
     * @var string 作业名称，支持长度小于50的中文/英文/数字/”-”/”_”/”.”，不能重名
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Remark;

    /**
     * @var string 拖拽文件需传入此参数
     */
    public $TargetFolderId;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param string $JobId 作业Id
     * @param string $Name 作业名称，支持长度小于50的中文/英文/数字/”-”/”_”/”.”，不能重名
     * @param string $Remark 描述
     * @param string $TargetFolderId 拖拽文件需传入此参数
     * @param string $WorkSpaceId 工作空间 SerialId
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TargetFolderId",$param) and $param["TargetFolderId"] !== null) {
            $this->TargetFolderId = $param["TargetFolderId"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
