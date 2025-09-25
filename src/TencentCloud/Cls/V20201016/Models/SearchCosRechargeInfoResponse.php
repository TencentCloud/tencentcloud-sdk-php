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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchCosRechargeInfo返回参数结构体
 *
 * @method array getData() 获取匹配到的存储桶下的某个文件的前几行数据
 * @method void setData(array $Data) 设置匹配到的存储桶下的某个文件的前几行数据
 * @method integer getSum() 获取匹配到的存储桶下的文件个数
 * @method void setSum(integer $Sum) 设置匹配到的存储桶下的文件个数
 * @method string getPath() 获取当前预览文件路径
 * @method void setPath(string $Path) 设置当前预览文件路径
 * @method string getMsg() 获取预览获取数据失败原因
 * @method void setMsg(string $Msg) 设置预览获取数据失败原因
 * @method integer getStatus() 获取状态。
- 0：成功
- 10000：参数错误，请确认参数
- 10001：授权失败，请确认授权
- 10002：获取文件列表失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
- 10003：桶内无相应前缀文件，请使用正确的桶、文件前缀和压缩方式
- 10004：文件下载失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
- 10005：文件解压缩失败，请选择正确的压缩方式然后再试
- 10006：读取文件内容失败，请确认文件可读
- 10007：文件预览失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
 * @method void setStatus(integer $Status) 设置状态。
- 0：成功
- 10000：参数错误，请确认参数
- 10001：授权失败，请确认授权
- 10002：获取文件列表失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
- 10003：桶内无相应前缀文件，请使用正确的桶、文件前缀和压缩方式
- 10004：文件下载失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
- 10005：文件解压缩失败，请选择正确的压缩方式然后再试
- 10006：读取文件内容失败，请确认文件可读
- 10007：文件预览失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SearchCosRechargeInfoResponse extends AbstractModel
{
    /**
     * @var array 匹配到的存储桶下的某个文件的前几行数据
     */
    public $Data;

    /**
     * @var integer 匹配到的存储桶下的文件个数
     */
    public $Sum;

    /**
     * @var string 当前预览文件路径
     */
    public $Path;

    /**
     * @var string 预览获取数据失败原因
     */
    public $Msg;

    /**
     * @var integer 状态。
- 0：成功
- 10000：参数错误，请确认参数
- 10001：授权失败，请确认授权
- 10002：获取文件列表失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
- 10003：桶内无相应前缀文件，请使用正确的桶、文件前缀和压缩方式
- 10004：文件下载失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
- 10005：文件解压缩失败，请选择正确的压缩方式然后再试
- 10006：读取文件内容失败，请确认文件可读
- 10007：文件预览失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 匹配到的存储桶下的某个文件的前几行数据
     * @param integer $Sum 匹配到的存储桶下的文件个数
     * @param string $Path 当前预览文件路径
     * @param string $Msg 预览获取数据失败原因
     * @param integer $Status 状态。
- 0：成功
- 10000：参数错误，请确认参数
- 10001：授权失败，请确认授权
- 10002：获取文件列表失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
- 10003：桶内无相应前缀文件，请使用正确的桶、文件前缀和压缩方式
- 10004：文件下载失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
- 10005：文件解压缩失败，请选择正确的压缩方式然后再试
- 10006：读取文件内容失败，请确认文件可读
- 10007：文件预览失败，请稍后再试。若无法解决，请咨询 [在线支持](https://cloud.tencent.com/online-service) 或 [提交工单](https://console.cloud.tencent.com/workorder/category?level1_id=83&level2_id=469&source=14&data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&step=1) 处理。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Sum",$param) and $param["Sum"] !== null) {
            $this->Sum = $param["Sum"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
