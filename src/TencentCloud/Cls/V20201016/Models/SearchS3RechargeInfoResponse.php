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
 * SearchS3RechargeInfo返回参数结构体
 *
 * @method array getData() 获取<p>匹配到的存储桶下的某个文件的前几行数据</p>
 * @method void setData(array $Data) 设置<p>匹配到的存储桶下的某个文件的前几行数据</p>
 * @method integer getSum() 获取<p>匹配到的存储桶下的文件个数</p>
 * @method void setSum(integer $Sum) 设置<p>匹配到的存储桶下的文件个数</p>
 * @method string getPath() 获取<p>当前预览文件路径</p>
 * @method void setPath(string $Path) 设置<p>当前预览文件路径</p>
 * @method string getMsg() 获取<p>预览获取数据失败原因</p>
 * @method void setMsg(string $Msg) 设置<p>预览获取数据失败原因</p>
 * @method integer getStatus() 获取<p>状态。</p><ul><li>0：成功</li><li>10000：参数错误，请确认参数</li><li>10001：授权失败，请确认授权</li><li>10002：获取文件列表失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li><li>10003：桶内无相应前缀文件，请使用正确的桶、文件前缀和压缩方式</li><li>10004：文件下载失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li><li>10005：文件解压缩失败，请选择正确的压缩方式然后再试</li><li>10006：读取文件内容失败，请确认文件可读</li><li>10007：文件预览失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li></ul>
 * @method void setStatus(integer $Status) 设置<p>状态。</p><ul><li>0：成功</li><li>10000：参数错误，请确认参数</li><li>10001：授权失败，请确认授权</li><li>10002：获取文件列表失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li><li>10003：桶内无相应前缀文件，请使用正确的桶、文件前缀和压缩方式</li><li>10004：文件下载失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li><li>10005：文件解压缩失败，请选择正确的压缩方式然后再试</li><li>10006：读取文件内容失败，请确认文件可读</li><li>10007：文件预览失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SearchS3RechargeInfoResponse extends AbstractModel
{
    /**
     * @var array <p>匹配到的存储桶下的某个文件的前几行数据</p>
     */
    public $Data;

    /**
     * @var integer <p>匹配到的存储桶下的文件个数</p>
     */
    public $Sum;

    /**
     * @var string <p>当前预览文件路径</p>
     */
    public $Path;

    /**
     * @var string <p>预览获取数据失败原因</p>
     */
    public $Msg;

    /**
     * @var integer <p>状态。</p><ul><li>0：成功</li><li>10000：参数错误，请确认参数</li><li>10001：授权失败，请确认授权</li><li>10002：获取文件列表失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li><li>10003：桶内无相应前缀文件，请使用正确的桶、文件前缀和压缩方式</li><li>10004：文件下载失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li><li>10005：文件解压缩失败，请选择正确的压缩方式然后再试</li><li>10006：读取文件内容失败，请确认文件可读</li><li>10007：文件预览失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li></ul>
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data <p>匹配到的存储桶下的某个文件的前几行数据</p>
     * @param integer $Sum <p>匹配到的存储桶下的文件个数</p>
     * @param string $Path <p>当前预览文件路径</p>
     * @param string $Msg <p>预览获取数据失败原因</p>
     * @param integer $Status <p>状态。</p><ul><li>0：成功</li><li>10000：参数错误，请确认参数</li><li>10001：授权失败，请确认授权</li><li>10002：获取文件列表失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li><li>10003：桶内无相应前缀文件，请使用正确的桶、文件前缀和压缩方式</li><li>10004：文件下载失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li><li>10005：文件解压缩失败，请选择正确的压缩方式然后再试</li><li>10006：读取文件内容失败，请确认文件可读</li><li>10007：文件预览失败，请稍后再试。若无法解决，请咨询 <a href="https://cloud.tencent.com/online-service">在线支持</a> 或 <a href="https://console.cloud.tencent.com/workorder/category?level1_id=83&amp;level2_id=469&amp;source=14&amp;data_title=%E6%97%A5%E5%BF%97%E6%9C%8D%E5%8A%A1&amp;step=1">提交工单</a> 处理。</li></ul>
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
