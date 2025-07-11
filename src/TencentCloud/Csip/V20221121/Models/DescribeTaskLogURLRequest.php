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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskLogURL请求参数结构体
 *
 * @method integer getType() 获取0: 预览， 1: 下载
 * @method void setType(integer $Type) 设置0: 预览， 1: 下载
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method array getReportItemKeyList() 获取任务报告Id 列表
 * @method void setReportItemKeyList(array $ReportItemKeyList) 设置任务报告Id 列表
 * @method array getReportTaskIdList() 获取报告中任务id列表
 * @method void setReportTaskIdList(array $ReportTaskIdList) 设置报告中任务id列表
 */
class DescribeTaskLogURLRequest extends AbstractModel
{
    /**
     * @var integer 0: 预览， 1: 下载
     */
    public $Type;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var array 任务报告Id 列表
     */
    public $ReportItemKeyList;

    /**
     * @var array 报告中任务id列表
     */
    public $ReportTaskIdList;

    /**
     * @param integer $Type 0: 预览， 1: 下载
     * @param array $MemberId 集团账号的成员id
     * @param array $ReportItemKeyList 任务报告Id 列表
     * @param array $ReportTaskIdList 报告中任务id列表
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ReportItemKeyList",$param) and $param["ReportItemKeyList"] !== null) {
            $this->ReportItemKeyList = [];
            foreach ($param["ReportItemKeyList"] as $key => $value){
                $obj = new ReportItemKey();
                $obj->deserialize($value);
                array_push($this->ReportItemKeyList, $obj);
            }
        }

        if (array_key_exists("ReportTaskIdList",$param) and $param["ReportTaskIdList"] !== null) {
            $this->ReportTaskIdList = [];
            foreach ($param["ReportTaskIdList"] as $key => $value){
                $obj = new ReportTaskIdList();
                $obj->deserialize($value);
                array_push($this->ReportTaskIdList, $obj);
            }
        }
    }
}
