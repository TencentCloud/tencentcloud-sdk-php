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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchModifyOwnersNew请求参数结构体
 *
 * @method array getTaskIdList() 获取需要更新责任人的TaskId数组
 * @method void setTaskIdList(array $TaskIdList) 设置需要更新责任人的TaskId数组
 * @method string getOwners() 获取需要更新的责任人
 * @method void setOwners(string $Owners) 设置需要更新的责任人
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 */
class BatchModifyOwnersNewRequest extends AbstractModel
{
    /**
     * @var array 需要更新责任人的TaskId数组
     */
    public $TaskIdList;

    /**
     * @var string 需要更新的责任人
     */
    public $Owners;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @param array $TaskIdList 需要更新责任人的TaskId数组
     * @param string $Owners 需要更新的责任人
     * @param string $ProjectId 项目Id
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
        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("Owners",$param) and $param["Owners"] !== null) {
            $this->Owners = $param["Owners"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
