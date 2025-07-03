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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateBindResourceTaskResult请求参数结构体
 *
 * @method array getTaskIds() 获取任务ID，根据CreateCertificateBindResourceSyncTask得到的任务ID查询绑定云资源结果， 最大支持100个
 * @method void setTaskIds(array $TaskIds) 设置任务ID，根据CreateCertificateBindResourceSyncTask得到的任务ID查询绑定云资源结果， 最大支持100个
 */
class DescribeCertificateBindResourceTaskResultRequest extends AbstractModel
{
    /**
     * @var array 任务ID，根据CreateCertificateBindResourceSyncTask得到的任务ID查询绑定云资源结果， 最大支持100个
     */
    public $TaskIds;

    /**
     * @param array $TaskIds 任务ID，根据CreateCertificateBindResourceSyncTask得到的任务ID查询绑定云资源结果， 最大支持100个
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }
    }
}
