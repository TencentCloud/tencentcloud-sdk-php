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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySyncJobConfig请求参数结构体
 *
 * @method string getJobId() 获取同步任务id
 * @method void setJobId(string $JobId) 设置同步任务id
 * @method Objects getDynamicObjects() 获取修改后的同步对象
 * @method void setDynamicObjects(Objects $DynamicObjects) 设置修改后的同步对象
 * @method DynamicOptions getDynamicOptions() 获取修改后的同步任务选项
 * @method void setDynamicOptions(DynamicOptions $DynamicOptions) 设置修改后的同步任务选项
 */
class ModifySyncJobConfigRequest extends AbstractModel
{
    /**
     * @var string 同步任务id
     */
    public $JobId;

    /**
     * @var Objects 修改后的同步对象
     */
    public $DynamicObjects;

    /**
     * @var DynamicOptions 修改后的同步任务选项
     */
    public $DynamicOptions;

    /**
     * @param string $JobId 同步任务id
     * @param Objects $DynamicObjects 修改后的同步对象
     * @param DynamicOptions $DynamicOptions 修改后的同步任务选项
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

        if (array_key_exists("DynamicObjects",$param) and $param["DynamicObjects"] !== null) {
            $this->DynamicObjects = new Objects();
            $this->DynamicObjects->deserialize($param["DynamicObjects"]);
        }

        if (array_key_exists("DynamicOptions",$param) and $param["DynamicOptions"] !== null) {
            $this->DynamicOptions = new DynamicOptions();
            $this->DynamicOptions->deserialize($param["DynamicOptions"]);
        }
    }
}
