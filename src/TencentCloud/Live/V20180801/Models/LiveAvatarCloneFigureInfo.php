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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数字人直播间克隆形象信息
 *
 * @method string getTaskId() 获取<p>克隆形象任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>克隆形象任务ID</p>
 * @method string getSceneType() 获取<p>场景模式</p><p>枚举值：</p><ul><li>PHOTO： 图生形象</li><li>GREEN_SCREEN： 绿幕形象</li><li>REAL_SHOT： 实景形象</li></ul>
 * @method void setSceneType(string $SceneType) 设置<p>场景模式</p><p>枚举值：</p><ul><li>PHOTO： 图生形象</li><li>GREEN_SCREEN： 绿幕形象</li><li>REAL_SHOT： 实景形象</li></ul>
 * @method string getFigureName() 获取<p>形象名称</p>
 * @method void setFigureName(string $FigureName) 设置<p>形象名称</p>
 * @method string getGender() 获取<p>性别：男或者女</p>
 * @method void setGender(string $Gender) 设置<p>性别：男或者女</p>
 * @method string getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>SUCCESS： 成功</li><li>FAILED： 失败</li><li>PROCESSING： 生成中</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>SUCCESS： 成功</li><li>FAILED： 失败</li><li>PROCESSING： 生成中</li></ul>
 * @method integer getProgress() 获取<p>进度条</p>
 * @method void setProgress(integer $Progress) 设置<p>进度条</p>
 * @method string getAvatarKey() 获取<p>克隆好的形象在系统的key</p>
 * @method void setAvatarKey(string $AvatarKey) 设置<p>克隆好的形象在系统的key</p>
 * @method string getFigureImg() 获取<p>形象的图像</p>
 * @method void setFigureImg(string $FigureImg) 设置<p>形象的图像</p>
 * @method string getFailReason() 获取<p>失败原因，成功时，该字段没值</p>
 * @method void setFailReason(string $FailReason) 设置<p>失败原因，成功时，该字段没值</p>
 * @method string getMaterialUrl() 获取<p>训练视频</p>
 * @method void setMaterialUrl(string $MaterialUrl) 设置<p>训练视频</p>
 * @method string getCreateTime() 获取<p>该克隆音色创建的时间</p><p>参数格式：YYYY-MM-DD</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>该克隆音色创建的时间</p><p>参数格式：YYYY-MM-DD</p>
 * @method string getUpdateTime() 获取<p>更新时间</p><p>参数格式：YYYY-MM</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p><p>参数格式：YYYY-MM</p>
 * @method string getRenewStatus() 获取<p>是否有续期</p>
 * @method void setRenewStatus(string $RenewStatus) 设置<p>是否有续期</p>
 * @method boolean getIsExpired() 获取<p>是否过期</p>
 * @method void setIsExpired(boolean $IsExpired) 设置<p>是否过期</p>
 * @method string getExpireTime() 获取<p>有效期时间</p><p>参数格式：YYYY-MM</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>有效期时间</p><p>参数格式：YYYY-MM</p>
 * @method integer getNeedPlayback() 获取<p>是否循环播放(实景克隆形象能使用)</p>
 * @method void setNeedPlayback(integer $NeedPlayback) 设置<p>是否循环播放(实景克隆形象能使用)</p>
 * @method integer getPhotoVersion() 获取<p>训练幅度，0：表示只有有头部动；1表示头部和手势都有训练</p><p>单位：1</p>
 * @method void setPhotoVersion(integer $PhotoVersion) 设置<p>训练幅度，0：表示只有有头部动；1表示头部和手势都有训练</p><p>单位：1</p>
 * @method string getConfirmDemoUrls() 获取<p>待确认视频</p>
 * @method void setConfirmDemoUrls(string $ConfirmDemoUrls) 设置<p>待确认视频</p>
 * @method string getEstimatedCompleteTime() 获取<p>形象克隆完成时间</p><p>参数格式：YYYY-MM</p>
 * @method void setEstimatedCompleteTime(string $EstimatedCompleteTime) 设置<p>形象克隆完成时间</p><p>参数格式：YYYY-MM</p>
 */
class LiveAvatarCloneFigureInfo extends AbstractModel
{
    /**
     * @var string <p>克隆形象任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>场景模式</p><p>枚举值：</p><ul><li>PHOTO： 图生形象</li><li>GREEN_SCREEN： 绿幕形象</li><li>REAL_SHOT： 实景形象</li></ul>
     */
    public $SceneType;

    /**
     * @var string <p>形象名称</p>
     */
    public $FigureName;

    /**
     * @var string <p>性别：男或者女</p>
     */
    public $Gender;

    /**
     * @var string <p>状态</p><p>枚举值：</p><ul><li>SUCCESS： 成功</li><li>FAILED： 失败</li><li>PROCESSING： 生成中</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>进度条</p>
     */
    public $Progress;

    /**
     * @var string <p>克隆好的形象在系统的key</p>
     */
    public $AvatarKey;

    /**
     * @var string <p>形象的图像</p>
     */
    public $FigureImg;

    /**
     * @var string <p>失败原因，成功时，该字段没值</p>
     */
    public $FailReason;

    /**
     * @var string <p>训练视频</p>
     */
    public $MaterialUrl;

    /**
     * @var string <p>该克隆音色创建的时间</p><p>参数格式：YYYY-MM-DD</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p><p>参数格式：YYYY-MM</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>是否有续期</p>
     */
    public $RenewStatus;

    /**
     * @var boolean <p>是否过期</p>
     */
    public $IsExpired;

    /**
     * @var string <p>有效期时间</p><p>参数格式：YYYY-MM</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>是否循环播放(实景克隆形象能使用)</p>
     */
    public $NeedPlayback;

    /**
     * @var integer <p>训练幅度，0：表示只有有头部动；1表示头部和手势都有训练</p><p>单位：1</p>
     */
    public $PhotoVersion;

    /**
     * @var string <p>待确认视频</p>
     */
    public $ConfirmDemoUrls;

    /**
     * @var string <p>形象克隆完成时间</p><p>参数格式：YYYY-MM</p>
     */
    public $EstimatedCompleteTime;

    /**
     * @param string $TaskId <p>克隆形象任务ID</p>
     * @param string $SceneType <p>场景模式</p><p>枚举值：</p><ul><li>PHOTO： 图生形象</li><li>GREEN_SCREEN： 绿幕形象</li><li>REAL_SHOT： 实景形象</li></ul>
     * @param string $FigureName <p>形象名称</p>
     * @param string $Gender <p>性别：男或者女</p>
     * @param string $Status <p>状态</p><p>枚举值：</p><ul><li>SUCCESS： 成功</li><li>FAILED： 失败</li><li>PROCESSING： 生成中</li></ul>
     * @param integer $Progress <p>进度条</p>
     * @param string $AvatarKey <p>克隆好的形象在系统的key</p>
     * @param string $FigureImg <p>形象的图像</p>
     * @param string $FailReason <p>失败原因，成功时，该字段没值</p>
     * @param string $MaterialUrl <p>训练视频</p>
     * @param string $CreateTime <p>该克隆音色创建的时间</p><p>参数格式：YYYY-MM-DD</p>
     * @param string $UpdateTime <p>更新时间</p><p>参数格式：YYYY-MM</p>
     * @param string $RenewStatus <p>是否有续期</p>
     * @param boolean $IsExpired <p>是否过期</p>
     * @param string $ExpireTime <p>有效期时间</p><p>参数格式：YYYY-MM</p>
     * @param integer $NeedPlayback <p>是否循环播放(实景克隆形象能使用)</p>
     * @param integer $PhotoVersion <p>训练幅度，0：表示只有有头部动；1表示头部和手势都有训练</p><p>单位：1</p>
     * @param string $ConfirmDemoUrls <p>待确认视频</p>
     * @param string $EstimatedCompleteTime <p>形象克隆完成时间</p><p>参数格式：YYYY-MM</p>
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

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("FigureName",$param) and $param["FigureName"] !== null) {
            $this->FigureName = $param["FigureName"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("AvatarKey",$param) and $param["AvatarKey"] !== null) {
            $this->AvatarKey = $param["AvatarKey"];
        }

        if (array_key_exists("FigureImg",$param) and $param["FigureImg"] !== null) {
            $this->FigureImg = $param["FigureImg"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("MaterialUrl",$param) and $param["MaterialUrl"] !== null) {
            $this->MaterialUrl = $param["MaterialUrl"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RenewStatus",$param) and $param["RenewStatus"] !== null) {
            $this->RenewStatus = $param["RenewStatus"];
        }

        if (array_key_exists("IsExpired",$param) and $param["IsExpired"] !== null) {
            $this->IsExpired = $param["IsExpired"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("NeedPlayback",$param) and $param["NeedPlayback"] !== null) {
            $this->NeedPlayback = $param["NeedPlayback"];
        }

        if (array_key_exists("PhotoVersion",$param) and $param["PhotoVersion"] !== null) {
            $this->PhotoVersion = $param["PhotoVersion"];
        }

        if (array_key_exists("ConfirmDemoUrls",$param) and $param["ConfirmDemoUrls"] !== null) {
            $this->ConfirmDemoUrls = $param["ConfirmDemoUrls"];
        }

        if (array_key_exists("EstimatedCompleteTime",$param) and $param["EstimatedCompleteTime"] !== null) {
            $this->EstimatedCompleteTime = $param["EstimatedCompleteTime"];
        }
    }
}
