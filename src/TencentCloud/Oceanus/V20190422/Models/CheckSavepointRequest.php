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
 * CheckSavepoint请求参数结构体
 *
 * @method string getJobId() 获取作业 id
 * @method void setJobId(string $JobId) 设置作业 id
 * @method string getSerialId() 获取快照资源 id
 * @method void setSerialId(string $SerialId) 设置快照资源 id
 * @method integer getRecordType() 获取快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint
 * @method void setRecordType(integer $RecordType) 设置快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint
 * @method string getSavepointPath() 获取快照路径，目前只支持 cos 路径
 * @method void setSavepointPath(string $SavepointPath) 设置快照路径，目前只支持 cos 路径
 * @method string getWorkSpaceId() 获取工作空间 id
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 id
 */
class CheckSavepointRequest extends AbstractModel
{
    /**
     * @var string 作业 id
     */
    public $JobId;

    /**
     * @var string 快照资源 id
     */
    public $SerialId;

    /**
     * @var integer 快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint
     */
    public $RecordType;

    /**
     * @var string 快照路径，目前只支持 cos 路径
     */
    public $SavepointPath;

    /**
     * @var string 工作空间 id
     */
    public $WorkSpaceId;

    /**
     * @param string $JobId 作业 id
     * @param string $SerialId 快照资源 id
     * @param integer $RecordType 快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint
     * @param string $SavepointPath 快照路径，目前只支持 cos 路径
     * @param string $WorkSpaceId 工作空间 id
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

        if (array_key_exists("SerialId",$param) and $param["SerialId"] !== null) {
            $this->SerialId = $param["SerialId"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("SavepointPath",$param) and $param["SavepointPath"] !== null) {
            $this->SavepointPath = $param["SavepointPath"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
