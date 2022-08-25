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
namespace TencentCloud\Acp\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceUsageInfo请求参数结构体
 *
 * @method string getPriceName() 获取资源计费项名称(为空时，则根据Source，TaskType和Platform进行查询)
 * @method void setPriceName(string $PriceName) 设置资源计费项名称(为空时，则根据Source，TaskType和Platform进行查询)
 * @method integer getTaskType() 获取任务类型, 0:基础版, 1:专家版
 * @method void setTaskType(integer $TaskType) 设置任务类型, 0:基础版, 1:专家版
 * @method integer getPlatform() 获取应用平台, 0:android
 * @method void setPlatform(integer $Platform) 设置应用平台, 0:android
 * @method integer getSource() 获取任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
 * @method void setSource(integer $Source) 设置任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
 */
class DescribeResourceUsageInfoRequest extends AbstractModel
{
    /**
     * @var string 资源计费项名称(为空时，则根据Source，TaskType和Platform进行查询)
     */
    public $PriceName;

    /**
     * @var integer 任务类型, 0:基础版, 1:专家版
     */
    public $TaskType;

    /**
     * @var integer 应用平台, 0:android
     */
    public $Platform;

    /**
     * @var integer 任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
     */
    public $Source;

    /**
     * @param string $PriceName 资源计费项名称(为空时，则根据Source，TaskType和Platform进行查询)
     * @param integer $TaskType 任务类型, 0:基础版, 1:专家版
     * @param integer $Platform 应用平台, 0:android
     * @param integer $Source 任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
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
        if (array_key_exists("PriceName",$param) and $param["PriceName"] !== null) {
            $this->PriceName = $param["PriceName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
