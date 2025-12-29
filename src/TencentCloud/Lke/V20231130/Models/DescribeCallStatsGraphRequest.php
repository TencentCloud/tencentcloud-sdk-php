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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCallStatsGraph请求参数结构体
 *
 * @method array getUinAccount() 获取子账号标识列表，支持批量查询多个子账号。不填时查询主账号下所有子账号的汇总数据
 * @method void setUinAccount(array $UinAccount) 设置子账号标识列表，支持批量查询多个子账号。不填时查询主账号下所有子账号的汇总数据
 * @method string getLoginUin() 获取登录用户主账号(集成商模式必填)
 * @method void setLoginUin(string $LoginUin) 设置登录用户主账号(集成商模式必填)
 * @method string getLoginSubAccountUin() 获取登录用户子账号(集成商模式必填)
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置登录用户子账号(集成商模式必填)
 * @method string getSubBizType() 获取子业务类型，用于筛选不同业务场景的调用统计
 * @method void setSubBizType(string $SubBizType) 设置子业务类型，用于筛选不同业务场景的调用统计
 * @method string getModelName() 获取模型标识
 * @method void setModelName(string $ModelName) 设置模型标识
 * @method string getStartTime() 获取开始时间戳, 单位为秒(废弃)
 * @method void setStartTime(string $StartTime) 设置开始时间戳, 单位为秒(废弃)
 * @method string getEndTime() 获取结束时间戳, 单位为秒(废弃)
 * @method void setEndTime(string $EndTime) 设置结束时间戳, 单位为秒(废弃)
 * @method array getAppBizIds() 获取应用id列表
 * @method void setAppBizIds(array $AppBizIds) 设置应用id列表
 * @method array getSubScenes() 获取筛选子场景(文档解析场景使用)
 * @method void setSubScenes(array $SubScenes) 设置筛选子场景(文档解析场景使用)
 * @method string getAppType() 获取应用类型(knowledge_qa应用管理， shared_knowlege 共享知识库)
 * @method void setAppType(string $AppType) 设置应用类型(knowledge_qa应用管理， shared_knowlege 共享知识库)
 * @method string getSpaceId() 获取空间ID，用于限定查询范围。不填时查询所有空间的数据
 * @method void setSpaceId(string $SpaceId) 设置空间ID，用于限定查询范围。不填时查询所有空间的数据
 * @method integer getStatStartTime() 获取开始时间。Unix 时间戳，单位是秒，默认为空。
 * @method void setStatStartTime(integer $StatStartTime) 设置开始时间。Unix 时间戳，单位是秒，默认为空。
 * @method integer getStatEndTime() 获取结束时间。Unix 时间戳，单位是秒，默认为空。
 * @method void setStatEndTime(integer $StatEndTime) 设置结束时间。Unix 时间戳，单位是秒，默认为空。
 */
class DescribeCallStatsGraphRequest extends AbstractModel
{
    /**
     * @var array 子账号标识列表，支持批量查询多个子账号。不填时查询主账号下所有子账号的汇总数据
     */
    public $UinAccount;

    /**
     * @var string 登录用户主账号(集成商模式必填)
     */
    public $LoginUin;

    /**
     * @var string 登录用户子账号(集成商模式必填)
     */
    public $LoginSubAccountUin;

    /**
     * @var string 子业务类型，用于筛选不同业务场景的调用统计
     */
    public $SubBizType;

    /**
     * @var string 模型标识
     */
    public $ModelName;

    /**
     * @var string 开始时间戳, 单位为秒(废弃)
     * @deprecated
     */
    public $StartTime;

    /**
     * @var string 结束时间戳, 单位为秒(废弃)
     * @deprecated
     */
    public $EndTime;

    /**
     * @var array 应用id列表
     */
    public $AppBizIds;

    /**
     * @var array 筛选子场景(文档解析场景使用)
     */
    public $SubScenes;

    /**
     * @var string 应用类型(knowledge_qa应用管理， shared_knowlege 共享知识库)
     */
    public $AppType;

    /**
     * @var string 空间ID，用于限定查询范围。不填时查询所有空间的数据
     */
    public $SpaceId;

    /**
     * @var integer 开始时间。Unix 时间戳，单位是秒，默认为空。
     */
    public $StatStartTime;

    /**
     * @var integer 结束时间。Unix 时间戳，单位是秒，默认为空。
     */
    public $StatEndTime;

    /**
     * @param array $UinAccount 子账号标识列表，支持批量查询多个子账号。不填时查询主账号下所有子账号的汇总数据
     * @param string $LoginUin 登录用户主账号(集成商模式必填)
     * @param string $LoginSubAccountUin 登录用户子账号(集成商模式必填)
     * @param string $SubBizType 子业务类型，用于筛选不同业务场景的调用统计
     * @param string $ModelName 模型标识
     * @param string $StartTime 开始时间戳, 单位为秒(废弃)
     * @param string $EndTime 结束时间戳, 单位为秒(废弃)
     * @param array $AppBizIds 应用id列表
     * @param array $SubScenes 筛选子场景(文档解析场景使用)
     * @param string $AppType 应用类型(knowledge_qa应用管理， shared_knowlege 共享知识库)
     * @param string $SpaceId 空间ID，用于限定查询范围。不填时查询所有空间的数据
     * @param integer $StatStartTime 开始时间。Unix 时间戳，单位是秒，默认为空。
     * @param integer $StatEndTime 结束时间。Unix 时间戳，单位是秒，默认为空。
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
        if (array_key_exists("UinAccount",$param) and $param["UinAccount"] !== null) {
            $this->UinAccount = $param["UinAccount"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("SubBizType",$param) and $param["SubBizType"] !== null) {
            $this->SubBizType = $param["SubBizType"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AppBizIds",$param) and $param["AppBizIds"] !== null) {
            $this->AppBizIds = $param["AppBizIds"];
        }

        if (array_key_exists("SubScenes",$param) and $param["SubScenes"] !== null) {
            $this->SubScenes = $param["SubScenes"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("StatStartTime",$param) and $param["StatStartTime"] !== null) {
            $this->StatStartTime = $param["StatStartTime"];
        }

        if (array_key_exists("StatEndTime",$param) and $param["StatEndTime"] !== null) {
            $this->StatEndTime = $param["StatEndTime"];
        }
    }
}
