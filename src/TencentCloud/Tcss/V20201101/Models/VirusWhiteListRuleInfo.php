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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VirusWhiteListRuleInfo
 *
 * @method integer getId() 获取<p>白名单id</p>
 * @method void setId(integer $Id) 设置<p>白名单id</p>
 * @method array getMd5List() 获取<p>md5加白内容</p>
 * @method void setMd5List(array $Md5List) 设置<p>md5加白内容</p>
 * @method array getImageIds() 获取<p>镜像id</p>
 * @method void setImageIds(array $ImageIds) 设置<p>镜像id</p>
 * @method integer getScope() 获取<p>范围</p>
 * @method void setScope(integer $Scope) 设置<p>范围</p>
 * @method integer getImageCount() 获取<p>镜像数</p>
 * @method void setImageCount(integer $ImageCount) 设置<p>镜像数</p>
 * @method integer getMd5Count() 获取<p>md5数</p>
 * @method void setMd5Count(integer $Md5Count) 设置<p>md5数</p>
 * @method string getRemark() 获取<p>标记</p>
 * @method void setRemark(string $Remark) 设置<p>标记</p>
 * @method string getInsertTime() 获取<p>插入时间</p>
 * @method void setInsertTime(string $InsertTime) 设置<p>插入时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 */
class VirusWhiteListRuleInfo extends AbstractModel
{
    /**
     * @var integer <p>白名单id</p>
     */
    public $Id;

    /**
     * @var array <p>md5加白内容</p>
     */
    public $Md5List;

    /**
     * @var array <p>镜像id</p>
     */
    public $ImageIds;

    /**
     * @var integer <p>范围</p>
     */
    public $Scope;

    /**
     * @var integer <p>镜像数</p>
     */
    public $ImageCount;

    /**
     * @var integer <p>md5数</p>
     */
    public $Md5Count;

    /**
     * @var string <p>标记</p>
     */
    public $Remark;

    /**
     * @var string <p>插入时间</p>
     */
    public $InsertTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param integer $Id <p>白名单id</p>
     * @param array $Md5List <p>md5加白内容</p>
     * @param array $ImageIds <p>镜像id</p>
     * @param integer $Scope <p>范围</p>
     * @param integer $ImageCount <p>镜像数</p>
     * @param integer $Md5Count <p>md5数</p>
     * @param string $Remark <p>标记</p>
     * @param string $InsertTime <p>插入时间</p>
     * @param string $UpdateTime <p>更新时间</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Md5List",$param) and $param["Md5List"] !== null) {
            $this->Md5List = $param["Md5List"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ImageCount",$param) and $param["ImageCount"] !== null) {
            $this->ImageCount = $param["ImageCount"];
        }

        if (array_key_exists("Md5Count",$param) and $param["Md5Count"] !== null) {
            $this->Md5Count = $param["Md5Count"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
