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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDictionaries请求参数结构体
 *
 * @method string getInstanceId() 获取ES实例ID
 * @method void setInstanceId(string $InstanceId) 设置ES实例ID
 * @method array getIkMainDicts() 获取安装时填IK分词主词典COS地址，删除时填词典名如test.dic
 * @method void setIkMainDicts(array $IkMainDicts) 设置安装时填IK分词主词典COS地址，删除时填词典名如test.dic
 * @method array getIkStopwords() 获取安装时填IK分词停用词词典COS地址，删除时填词典名如test.dic
 * @method void setIkStopwords(array $IkStopwords) 设置安装时填IK分词停用词词典COS地址，删除时填词典名如test.dic
 * @method array getSynonym() 获取安装时填同义词词典COS地址，删除时填词典名如test.dic
 * @method void setSynonym(array $Synonym) 设置安装时填同义词词典COS地址，删除时填词典名如test.dic
 * @method array getQQDict() 获取安装时填QQ分词词典COS地址，删除时填词典名如test.dic
 * @method void setQQDict(array $QQDict) 设置安装时填QQ分词词典COS地址，删除时填词典名如test.dic
 * @method integer getUpdateType() 获取0：安装；1：删除。默认值0
 * @method void setUpdateType(integer $UpdateType) 设置0：安装；1：删除。默认值0
 * @method boolean getForceRestart() 获取是否强制重启集群。默认值false
 * @method void setForceRestart(boolean $ForceRestart) 设置是否强制重启集群。默认值false
 */
class UpdateDictionariesRequest extends AbstractModel
{
    /**
     * @var string ES实例ID
     */
    public $InstanceId;

    /**
     * @var array 安装时填IK分词主词典COS地址，删除时填词典名如test.dic
     */
    public $IkMainDicts;

    /**
     * @var array 安装时填IK分词停用词词典COS地址，删除时填词典名如test.dic
     */
    public $IkStopwords;

    /**
     * @var array 安装时填同义词词典COS地址，删除时填词典名如test.dic
     */
    public $Synonym;

    /**
     * @var array 安装时填QQ分词词典COS地址，删除时填词典名如test.dic
     */
    public $QQDict;

    /**
     * @var integer 0：安装；1：删除。默认值0
     */
    public $UpdateType;

    /**
     * @var boolean 是否强制重启集群。默认值false
     */
    public $ForceRestart;

    /**
     * @param string $InstanceId ES实例ID
     * @param array $IkMainDicts 安装时填IK分词主词典COS地址，删除时填词典名如test.dic
     * @param array $IkStopwords 安装时填IK分词停用词词典COS地址，删除时填词典名如test.dic
     * @param array $Synonym 安装时填同义词词典COS地址，删除时填词典名如test.dic
     * @param array $QQDict 安装时填QQ分词词典COS地址，删除时填词典名如test.dic
     * @param integer $UpdateType 0：安装；1：删除。默认值0
     * @param boolean $ForceRestart 是否强制重启集群。默认值false
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IkMainDicts",$param) and $param["IkMainDicts"] !== null) {
            $this->IkMainDicts = $param["IkMainDicts"];
        }

        if (array_key_exists("IkStopwords",$param) and $param["IkStopwords"] !== null) {
            $this->IkStopwords = $param["IkStopwords"];
        }

        if (array_key_exists("Synonym",$param) and $param["Synonym"] !== null) {
            $this->Synonym = $param["Synonym"];
        }

        if (array_key_exists("QQDict",$param) and $param["QQDict"] !== null) {
            $this->QQDict = $param["QQDict"];
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }
    }
}
