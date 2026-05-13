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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckSavepoint请求参数结构体
 *
 * @method string getJobId() 获取<p>作业 id</p>
 * @method void setJobId(string $JobId) 设置<p>作业 id</p>
 * @method string getSerialId() 获取<p>快照资源 id</p>
 * @method void setSerialId(string $SerialId) 设置<p>快照资源 id</p>
 * @method integer getRecordType() 获取<p>快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint</p>
 * @method void setRecordType(integer $RecordType) 设置<p>快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint</p>
 * @method string getSavepointPath() 获取<p>快照路径，目前只支持 cos 路径</p>
 * @method void setSavepointPath(string $SavepointPath) 设置<p>快照路径，目前只支持 cos 路径</p>
 * @method string getWorkSpaceId() 获取<p>工作空间 id</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>工作空间 id</p>
 */
class CheckSavepointRequest extends AbstractModel
{
    /**
     * @var string <p>作业 id</p>
     */
    public $JobId;

    /**
     * @var string <p>快照资源 id</p>
     */
    public $SerialId;

    /**
     * @var integer <p>快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint</p>
     */
    public $RecordType;

    /**
     * @var string <p>快照路径，目前只支持 cos 路径</p>
     */
    public $SavepointPath;

    /**
     * @var string <p>工作空间 id</p>
     */
    public $WorkSpaceId;

    /**
     * @param string $JobId <p>作业 id</p>
     * @param string $SerialId <p>快照资源 id</p>
     * @param integer $RecordType <p>快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint</p>
     * @param string $SavepointPath <p>快照路径，目前只支持 cos 路径</p>
     * @param string $WorkSpaceId <p>工作空间 id</p>
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
