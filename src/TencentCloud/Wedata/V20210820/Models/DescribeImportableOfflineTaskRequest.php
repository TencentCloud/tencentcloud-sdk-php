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
 * DescribeImportableOfflineTask请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method array getCreaterList() 获取创建者列表
 * @method void setCreaterList(array $CreaterList) 设置创建者列表
 * @method array getInChargeList() 获取责任人列表
 * @method void setInChargeList(array $InChargeList) 设置责任人列表
 * @method array getOrderFields() 获取排序信息
最近修改时间：LastUpdate
 * @method void setOrderFields(array $OrderFields) 设置排序信息
最近修改时间：LastUpdate
 */
class DescribeImportableOfflineTaskRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var array 创建者列表
     */
    public $CreaterList;

    /**
     * @var array 责任人列表
     */
    public $InChargeList;

    /**
     * @var array 排序信息
最近修改时间：LastUpdate
     */
    public $OrderFields;

    /**
     * @param string $ProjectId 项目id
     * @param integer $PageNumber 页码
     * @param integer $PageSize 页大小
     * @param string $TaskName 任务名称
     * @param array $CreaterList 创建者列表
     * @param array $InChargeList 责任人列表
     * @param array $OrderFields 排序信息
最近修改时间：LastUpdate
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("CreaterList",$param) and $param["CreaterList"] !== null) {
            $this->CreaterList = $param["CreaterList"];
        }

        if (array_key_exists("InChargeList",$param) and $param["InChargeList"] !== null) {
            $this->InChargeList = $param["InChargeList"];
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }
    }
}
