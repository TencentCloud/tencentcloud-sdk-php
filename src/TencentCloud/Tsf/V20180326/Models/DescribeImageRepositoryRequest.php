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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageRepository请求参数结构体
 *
 * @method string getSearchWord() 获取仓库名，搜索关键字,不带命名空间的
 * @method void setSearchWord(string $SearchWord) 设置仓库名，搜索关键字,不带命名空间的
 * @method integer getOffset() 获取偏移量，取值从0开始
 * @method void setOffset(integer $Offset) 设置偏移量，取值从0开始
 * @method integer getLimit() 获取分页个数，默认为20， 取值应为1~100
 * @method void setLimit(integer $Limit) 设置分页个数，默认为20， 取值应为1~100
 * @method string getRepoType() 获取企业: tcr ；个人: personal或者不填
 * @method void setRepoType(string $RepoType) 设置企业: tcr ；个人: personal或者不填
 * @method string getApplicationId() 获取应用id
 * @method void setApplicationId(string $ApplicationId) 设置应用id
 * @method TcrRepoInfo getTcrRepoInfo() 获取TcrRepoInfo值
 * @method void setTcrRepoInfo(TcrRepoInfo $TcrRepoInfo) 设置TcrRepoInfo值
 */
class DescribeImageRepositoryRequest extends AbstractModel
{
    /**
     * @var string 仓库名，搜索关键字,不带命名空间的
     */
    public $SearchWord;

    /**
     * @var integer 偏移量，取值从0开始
     */
    public $Offset;

    /**
     * @var integer 分页个数，默认为20， 取值应为1~100
     */
    public $Limit;

    /**
     * @var string 企业: tcr ；个人: personal或者不填
     */
    public $RepoType;

    /**
     * @var string 应用id
     */
    public $ApplicationId;

    /**
     * @var TcrRepoInfo TcrRepoInfo值
     */
    public $TcrRepoInfo;

    /**
     * @param string $SearchWord 仓库名，搜索关键字,不带命名空间的
     * @param integer $Offset 偏移量，取值从0开始
     * @param integer $Limit 分页个数，默认为20， 取值应为1~100
     * @param string $RepoType 企业: tcr ；个人: personal或者不填
     * @param string $ApplicationId 应用id
     * @param TcrRepoInfo $TcrRepoInfo TcrRepoInfo值
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("TcrRepoInfo",$param) and $param["TcrRepoInfo"] !== null) {
            $this->TcrRepoInfo = new TcrRepoInfo();
            $this->TcrRepoInfo->deserialize($param["TcrRepoInfo"]);
        }
    }
}
