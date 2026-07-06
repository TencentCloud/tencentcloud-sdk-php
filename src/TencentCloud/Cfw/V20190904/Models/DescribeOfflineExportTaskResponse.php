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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOfflineExportTask返回参数结构体
 *
 * @method integer getReturnCode() 获取<p>返回状态码 0 成功 非0不成功</p>
 * @method void setReturnCode(integer $ReturnCode) 设置<p>返回状态码 0 成功 非0不成功</p>
 * @method string getReturnMsg() 获取<p>返回信息  success 成功 其他 不成功</p>
 * @method void setReturnMsg(string $ReturnMsg) 设置<p>返回信息  success 成功 其他 不成功</p>
 * @method array getData() 获取<p>离线导出任务列表</p>
 * @method void setData(array $Data) 设置<p>离线导出任务列表</p>
 * @method integer getTotal() 获取<p>任务数量</p>
 * @method void setTotal(integer $Total) 设置<p>任务数量</p>
 * @method integer getExportRemainQuota() 获取<p>剩余导出文件配额，单位B</p>
 * @method void setExportRemainQuota(integer $ExportRemainQuota) 设置<p>剩余导出文件配额，单位B</p>
 * @method integer getExportQuota() 获取<p>导出文件配额，单位B</p>
 * @method void setExportQuota(integer $ExportQuota) 设置<p>导出文件配额，单位B</p>
 * @method integer getExportLimit() 获取<p>导出数据限制</p>
 * @method void setExportLimit(integer $ExportLimit) 设置<p>导出数据限制</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOfflineExportTaskResponse extends AbstractModel
{
    /**
     * @var integer <p>返回状态码 0 成功 非0不成功</p>
     */
    public $ReturnCode;

    /**
     * @var string <p>返回信息  success 成功 其他 不成功</p>
     */
    public $ReturnMsg;

    /**
     * @var array <p>离线导出任务列表</p>
     */
    public $Data;

    /**
     * @var integer <p>任务数量</p>
     */
    public $Total;

    /**
     * @var integer <p>剩余导出文件配额，单位B</p>
     */
    public $ExportRemainQuota;

    /**
     * @var integer <p>导出文件配额，单位B</p>
     */
    public $ExportQuota;

    /**
     * @var integer <p>导出数据限制</p>
     */
    public $ExportLimit;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ReturnCode <p>返回状态码 0 成功 非0不成功</p>
     * @param string $ReturnMsg <p>返回信息  success 成功 其他 不成功</p>
     * @param array $Data <p>离线导出任务列表</p>
     * @param integer $Total <p>任务数量</p>
     * @param integer $ExportRemainQuota <p>剩余导出文件配额，单位B</p>
     * @param integer $ExportQuota <p>导出文件配额，单位B</p>
     * @param integer $ExportLimit <p>导出数据限制</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new OfflineExportTask();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("ExportRemainQuota",$param) and $param["ExportRemainQuota"] !== null) {
            $this->ExportRemainQuota = $param["ExportRemainQuota"];
        }

        if (array_key_exists("ExportQuota",$param) and $param["ExportQuota"] !== null) {
            $this->ExportQuota = $param["ExportQuota"];
        }

        if (array_key_exists("ExportLimit",$param) and $param["ExportLimit"] !== null) {
            $this->ExportLimit = $param["ExportLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
