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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测统计结果
 *
 * @method integer getFirstContentfulPaint() 获取首屏时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstContentfulPaint(integer $FirstContentfulPaint) 设置首屏时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFirstMeaningfulPaint() 获取首屏完全渲染时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstMeaningfulPaint(integer $FirstMeaningfulPaint) 设置首屏完全渲染时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getOverallDownloadSpeed() 获取整体下载速度，单位 KB/s。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOverallDownloadSpeed(float $OverallDownloadSpeed) 设置整体下载速度，单位 KB/s。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRenderTime() 获取渲染时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenderTime(integer $RenderTime) 设置渲染时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDocumentFinishTime() 获取文档完成时间, 单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocumentFinishTime(integer $DocumentFinishTime) 设置文档完成时间, 单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTcpConnectionTime() 获取基础文档TCP连接时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcpConnectionTime(integer $TcpConnectionTime) 设置基础文档TCP连接时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResponseTime() 获取基础文档服务器响应时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseTime(integer $ResponseTime) 设置基础文档服务器响应时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileDownloadTime() 获取基础文档下载时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileDownloadTime(integer $FileDownloadTime) 设置基础文档下载时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLoadTime() 获取整体性能，测试总时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadTime(integer $LoadTime) 设置整体性能，测试总时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpeedTestingStatistics extends AbstractModel
{
    /**
     * @var integer 首屏时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstContentfulPaint;

    /**
     * @var integer 首屏完全渲染时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstMeaningfulPaint;

    /**
     * @var float 整体下载速度，单位 KB/s。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OverallDownloadSpeed;

    /**
     * @var integer 渲染时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenderTime;

    /**
     * @var integer 文档完成时间, 单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocumentFinishTime;

    /**
     * @var integer 基础文档TCP连接时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcpConnectionTime;

    /**
     * @var integer 基础文档服务器响应时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseTime;

    /**
     * @var integer 基础文档下载时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileDownloadTime;

    /**
     * @var integer 整体性能，测试总时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadTime;

    /**
     * @param integer $FirstContentfulPaint 首屏时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FirstMeaningfulPaint 首屏完全渲染时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $OverallDownloadSpeed 整体下载速度，单位 KB/s。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenderTime 渲染时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DocumentFinishTime 文档完成时间, 单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TcpConnectionTime 基础文档TCP连接时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResponseTime 基础文档服务器响应时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileDownloadTime 基础文档下载时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LoadTime 整体性能，测试总时间，单位 ms。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FirstContentfulPaint",$param) and $param["FirstContentfulPaint"] !== null) {
            $this->FirstContentfulPaint = $param["FirstContentfulPaint"];
        }

        if (array_key_exists("FirstMeaningfulPaint",$param) and $param["FirstMeaningfulPaint"] !== null) {
            $this->FirstMeaningfulPaint = $param["FirstMeaningfulPaint"];
        }

        if (array_key_exists("OverallDownloadSpeed",$param) and $param["OverallDownloadSpeed"] !== null) {
            $this->OverallDownloadSpeed = $param["OverallDownloadSpeed"];
        }

        if (array_key_exists("RenderTime",$param) and $param["RenderTime"] !== null) {
            $this->RenderTime = $param["RenderTime"];
        }

        if (array_key_exists("DocumentFinishTime",$param) and $param["DocumentFinishTime"] !== null) {
            $this->DocumentFinishTime = $param["DocumentFinishTime"];
        }

        if (array_key_exists("TcpConnectionTime",$param) and $param["TcpConnectionTime"] !== null) {
            $this->TcpConnectionTime = $param["TcpConnectionTime"];
        }

        if (array_key_exists("ResponseTime",$param) and $param["ResponseTime"] !== null) {
            $this->ResponseTime = $param["ResponseTime"];
        }

        if (array_key_exists("FileDownloadTime",$param) and $param["FileDownloadTime"] !== null) {
            $this->FileDownloadTime = $param["FileDownloadTime"];
        }

        if (array_key_exists("LoadTime",$param) and $param["LoadTime"] !== null) {
            $this->LoadTime = $param["LoadTime"];
        }
    }
}
