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
 * Windows KB详细信息
 *
 * @method integer getID() 获取<p>KB 补丁内部 ID（kb_info.id）</p>
 * @method void setID(integer $ID) 设置<p>KB 补丁内部 ID（kb_info.id）</p>
 * @method string getNumber() 获取<p>KB 编号<br>参数格式：形如 KB5001234</p>
 * @method void setNumber(string $Number) 设置<p>KB 编号<br>参数格式：形如 KB5001234</p>
 * @method string getName() 获取<p>KB 补丁名称</p>
 * @method void setName(string $Name) 设置<p>KB 补丁名称</p>
 * @method string getReferUrl() 获取<p>参考链接（微软官方文档地址）</p>
 * @method void setReferUrl(string $ReferUrl) 设置<p>参考链接（微软官方文档地址）</p>
 * @method string getPublishTime() 获取<p>发布时间<br>参数格式：YYYY-MM-DD HH:mm:ss</p>
 * @method void setPublishTime(string $PublishTime) 设置<p>发布时间<br>参数格式：YYYY-MM-DD HH:mm:ss</p>
 * @method boolean getNeedRestart() 获取<p>安装该 KB 后是否需要重启<br>枚举值：<br>true：需要<br>false：不需要</p>
 * @method void setNeedRestart(boolean $NeedRestart) 设置<p>安装该 KB 后是否需要重启<br>枚举值：<br>true：需要<br>false：不需要</p>
 * @method array getRelateVulList() 获取<p>关联漏洞列表</p>
 * @method void setRelateVulList(array $RelateVulList) 设置<p>关联漏洞列表</p>
 * @method integer getRelateVulCount() 获取<p>关联漏洞总数</p>
 * @method void setRelateVulCount(integer $RelateVulCount) 设置<p>关联漏洞总数</p>
 * @method string getRelateProduct() 获取<p>关联os版本</p>
 * @method void setRelateProduct(string $RelateProduct) 设置<p>关联os版本</p>
 */
class KBDetail extends AbstractModel
{
    /**
     * @var integer <p>KB 补丁内部 ID（kb_info.id）</p>
     */
    public $ID;

    /**
     * @var string <p>KB 编号<br>参数格式：形如 KB5001234</p>
     */
    public $Number;

    /**
     * @var string <p>KB 补丁名称</p>
     */
    public $Name;

    /**
     * @var string <p>参考链接（微软官方文档地址）</p>
     */
    public $ReferUrl;

    /**
     * @var string <p>发布时间<br>参数格式：YYYY-MM-DD HH:mm:ss</p>
     */
    public $PublishTime;

    /**
     * @var boolean <p>安装该 KB 后是否需要重启<br>枚举值：<br>true：需要<br>false：不需要</p>
     */
    public $NeedRestart;

    /**
     * @var array <p>关联漏洞列表</p>
     */
    public $RelateVulList;

    /**
     * @var integer <p>关联漏洞总数</p>
     */
    public $RelateVulCount;

    /**
     * @var string <p>关联os版本</p>
     */
    public $RelateProduct;

    /**
     * @param integer $ID <p>KB 补丁内部 ID（kb_info.id）</p>
     * @param string $Number <p>KB 编号<br>参数格式：形如 KB5001234</p>
     * @param string $Name <p>KB 补丁名称</p>
     * @param string $ReferUrl <p>参考链接（微软官方文档地址）</p>
     * @param string $PublishTime <p>发布时间<br>参数格式：YYYY-MM-DD HH:mm:ss</p>
     * @param boolean $NeedRestart <p>安装该 KB 后是否需要重启<br>枚举值：<br>true：需要<br>false：不需要</p>
     * @param array $RelateVulList <p>关联漏洞列表</p>
     * @param integer $RelateVulCount <p>关联漏洞总数</p>
     * @param string $RelateProduct <p>关联os版本</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ReferUrl",$param) and $param["ReferUrl"] !== null) {
            $this->ReferUrl = $param["ReferUrl"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("RelateVulList",$param) and $param["RelateVulList"] !== null) {
            $this->RelateVulList = [];
            foreach ($param["RelateVulList"] as $key => $value){
                $obj = new VulBriefInfo();
                $obj->deserialize($value);
                array_push($this->RelateVulList, $obj);
            }
        }

        if (array_key_exists("RelateVulCount",$param) and $param["RelateVulCount"] !== null) {
            $this->RelateVulCount = $param["RelateVulCount"];
        }

        if (array_key_exists("RelateProduct",$param) and $param["RelateProduct"] !== null) {
            $this->RelateProduct = $param["RelateProduct"];
        }
    }
}
