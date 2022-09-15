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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目接口限制类型
 *
 * @method string getProjectInterface() 获取接口
 * @method void setProjectInterface(string $ProjectInterface) 设置接口
 * @method integer getReportRate() 获取上报率
 * @method void setReportRate(integer $ReportRate) 设置上报率
 * @method integer getReportType() 获取上报类型 1：上报率  2：上报量限制
 * @method void setReportType(integer $ReportType) 设置上报类型 1：上报率  2：上报量限制
 * @method integer getID() 获取主键ID
 * @method void setID(integer $ID) 设置主键ID
 * @method integer getProjectID() 获取项目ID
 * @method void setProjectID(integer $ProjectID) 设置项目ID
 */
class ProjectLimit extends AbstractModel
{
    /**
     * @var string 接口
     */
    public $ProjectInterface;

    /**
     * @var integer 上报率
     */
    public $ReportRate;

    /**
     * @var integer 上报类型 1：上报率  2：上报量限制
     */
    public $ReportType;

    /**
     * @var integer 主键ID
     */
    public $ID;

    /**
     * @var integer 项目ID
     */
    public $ProjectID;

    /**
     * @param string $ProjectInterface 接口
     * @param integer $ReportRate 上报率
     * @param integer $ReportType 上报类型 1：上报率  2：上报量限制
     * @param integer $ID 主键ID
     * @param integer $ProjectID 项目ID
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
        if (array_key_exists("ProjectInterface",$param) and $param["ProjectInterface"] !== null) {
            $this->ProjectInterface = $param["ProjectInterface"];
        }

        if (array_key_exists("ReportRate",$param) and $param["ReportRate"] !== null) {
            $this->ReportRate = $param["ReportRate"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }
    }
}
