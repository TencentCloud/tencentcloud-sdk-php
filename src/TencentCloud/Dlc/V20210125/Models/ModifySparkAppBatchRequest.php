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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySparkAppBatch请求参数结构体
 *
 * @method array getSparkAppId() 获取需要批量修改的Spark作业任务ID列表
 * @method void setSparkAppId(array $SparkAppId) 设置需要批量修改的Spark作业任务ID列表
 * @method string getDataEngine() 获取引擎ID
 * @method void setDataEngine(string $DataEngine) 设置引擎ID
 * @method string getAppDriverSize() 获取driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
 * @method void setAppDriverSize(string $AppDriverSize) 设置driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
 * @method string getAppExecutorSize() 获取executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
 * @method void setAppExecutorSize(string $AppExecutorSize) 设置executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
 * @method integer getAppExecutorNums() 获取指定executor数量，最小值为1，最大值小于集群规格
 * @method void setAppExecutorNums(integer $AppExecutorNums) 设置指定executor数量，最小值为1，最大值小于集群规格
 * @method integer getAppExecutorMaxNumbers() 获取指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
 * @method void setAppExecutorMaxNumbers(integer $AppExecutorMaxNumbers) 设置指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
 * @method integer getIsInherit() 获取任务资源配置是否继承集群模板，0（默认）不继承，1：继承
 * @method void setIsInherit(integer $IsInherit) 设置任务资源配置是否继承集群模板，0（默认）不继承，1：继承
 */
class ModifySparkAppBatchRequest extends AbstractModel
{
    /**
     * @var array 需要批量修改的Spark作业任务ID列表
     */
    public $SparkAppId;

    /**
     * @var string 引擎ID
     */
    public $DataEngine;

    /**
     * @var string driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
     */
    public $AppDriverSize;

    /**
     * @var string executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
     */
    public $AppExecutorSize;

    /**
     * @var integer 指定executor数量，最小值为1，最大值小于集群规格
     */
    public $AppExecutorNums;

    /**
     * @var integer 指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
     */
    public $AppExecutorMaxNumbers;

    /**
     * @var integer 任务资源配置是否继承集群模板，0（默认）不继承，1：继承
     */
    public $IsInherit;

    /**
     * @param array $SparkAppId 需要批量修改的Spark作业任务ID列表
     * @param string $DataEngine 引擎ID
     * @param string $AppDriverSize driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
     * @param string $AppExecutorSize executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
     * @param integer $AppExecutorNums 指定executor数量，最小值为1，最大值小于集群规格
     * @param integer $AppExecutorMaxNumbers 指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
     * @param integer $IsInherit 任务资源配置是否继承集群模板，0（默认）不继承，1：继承
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
        if (array_key_exists("SparkAppId",$param) and $param["SparkAppId"] !== null) {
            $this->SparkAppId = $param["SparkAppId"];
        }

        if (array_key_exists("DataEngine",$param) and $param["DataEngine"] !== null) {
            $this->DataEngine = $param["DataEngine"];
        }

        if (array_key_exists("AppDriverSize",$param) and $param["AppDriverSize"] !== null) {
            $this->AppDriverSize = $param["AppDriverSize"];
        }

        if (array_key_exists("AppExecutorSize",$param) and $param["AppExecutorSize"] !== null) {
            $this->AppExecutorSize = $param["AppExecutorSize"];
        }

        if (array_key_exists("AppExecutorNums",$param) and $param["AppExecutorNums"] !== null) {
            $this->AppExecutorNums = $param["AppExecutorNums"];
        }

        if (array_key_exists("AppExecutorMaxNumbers",$param) and $param["AppExecutorMaxNumbers"] !== null) {
            $this->AppExecutorMaxNumbers = $param["AppExecutorMaxNumbers"];
        }

        if (array_key_exists("IsInherit",$param) and $param["IsInherit"] !== null) {
            $this->IsInherit = $param["IsInherit"];
        }
    }
}
