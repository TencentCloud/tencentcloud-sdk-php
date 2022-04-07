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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDataTransform请求参数结构体
 *
 * @method string getTaskId() 获取加工任务id
 * @method void setTaskId(string $TaskId) 设置加工任务id
 * @method string getName() 获取加工任务名称
 * @method void setName(string $Name) 设置加工任务名称
 * @method string getEtlContent() 获取加工逻辑函数
 * @method void setEtlContent(string $EtlContent) 设置加工逻辑函数
 * @method integer getEnableFlag() 获取任务启动状态. 默认为1，正常开启,  2关闭
 * @method void setEnableFlag(integer $EnableFlag) 设置任务启动状态. 默认为1，正常开启,  2关闭
 * @method array getDstResources() 获取加工任务目的topic_id以及别名
 * @method void setDstResources(array $DstResources) 设置加工任务目的topic_id以及别名
 */
class ModifyDataTransformRequest extends AbstractModel
{
    /**
     * @var string 加工任务id
     */
    public $TaskId;

    /**
     * @var string 加工任务名称
     */
    public $Name;

    /**
     * @var string 加工逻辑函数
     */
    public $EtlContent;

    /**
     * @var integer 任务启动状态. 默认为1，正常开启,  2关闭
     */
    public $EnableFlag;

    /**
     * @var array 加工任务目的topic_id以及别名
     */
    public $DstResources;

    /**
     * @param string $TaskId 加工任务id
     * @param string $Name 加工任务名称
     * @param string $EtlContent 加工逻辑函数
     * @param integer $EnableFlag 任务启动状态. 默认为1，正常开启,  2关闭
     * @param array $DstResources 加工任务目的topic_id以及别名
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }
    }
}
